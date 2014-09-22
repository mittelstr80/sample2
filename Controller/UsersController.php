<?php
class UsersController extends AppController{

    //definition of models
    public $uses = array('User');
    
    //----------------------------
    //ADDED BY YOSHI
    public $paginate = array(
        'limit' => 5,
        'order' => array(
            'username' => 'asc'
        )
    );
    //----------------------------
    
    public function beforeFilter(){
        //ログインなしでアクセスするにはコメントをはずす
        //$this->Auth->allow('add');
    }
    
    //Login
    public function login(){
        if($this->request->isPost()){
            if($this->Auth->login()){
                $this->redirect(array('action'=>'index'));
            }
        }
    }
    
    //logout
    public function logout(){
        $this->Auth->logout();
    }
    
    //Dashboard
    public function index(){
    }
    
    //User list
    public function userlist(){
        $userData = $this->paginate();
        $this->set(compact('userData'));
    }
    
    //View
    public function view($id){
        //display if the user is found
        $userData = $this->User->findById($id);
        if(empty($userData)){
            $this->Session->setFlash('ユーザが見つかりませんでした');
            $this->redirect(array('action'=>'userlist'));
        }
        $this->set(compact('userData'));
    }
    
    //add user
    public function add(){
        return $this->edit();
    }
    
    //edit user
    public function edit($id = null){
        if($this->request->isPost() || $this->request->isPut()){
            if($id != null){
                if($this->request->data[$this->User->alias]['password'] == ''){
                    unset($this->request->data[$this->User->alias]['password']);
                }
            }
            
            if($this->User->save($this->request->data)){
                $this->Session->setFlash('ユーザ情報を保存しました');
                $this->redirect(array('action'=>'userlist'));
            } else{
                $this->Session->setFlash('入力に間違いがあります');
            }
        } else{
            if($id !==null){
                $this->request->data = $this->User->findById($id);
                unset($this->request->data[$this->User->alias]['password']);
                
                if(empty($this->request->data)){
                    $this->Session->SetFlash('ユーザが見つかりませんでした');
                    $this->redirect(array('action'=>'userlist'));
                }
            }
        }
        
        //addもeditもedit.ctpを表示
        $this->render('edit');
    } 
    
    //delete
    
    public function delete($id){
        if($this->request->isDelete()){
            if($this->User->delete($id)){
                $this->Session->setFlash('ユーザを削除しました');
                $this->redirect(array('action'=>'userlist'));
                
            }
            $this->Session->setFlash('ユーザの削除に失敗しました');
            $this->redirect(array('action'=>'userlist'));
            
        } else{
            $this->request->data = $this->User->findById($id);
            if(empty($this->request->data)){
                $this->Session->setFlash('ユーザが見つかりませんでした');
                $this->redirect(array('action'=>'userlist'));
            }
        }
    }
    
}