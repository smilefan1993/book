<?php

class PostsController extends AppController {
    public $helpers = array('Html', 'Form');
    public $components = array('Flash');


    public function index() {
        if ($this->request->is('post')) {
            $this->Post->create();
            $this->Post->set(array('user_ip' => $this->request->clientIp(),
                                    'user_browser' => $_SERVER["HTTP_USER_AGENT"]));

            $this->request->data['Post']['user_text'] = htmlspecialchars($this->request->data['Post']['user_text']);
            if ($this->Post->save($this->request->data)) {
                $this->Flash->success(__('Your post has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to add your post.'));
        }
        $this->paginate = array(
            'limit' => 25,
            'order' => array(
                'Post.created' => 'asc'
            )
        );
        $posts = $this->paginate('Post');
        $this->set('posts', $posts);
    }
}