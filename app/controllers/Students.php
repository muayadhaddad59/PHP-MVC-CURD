<?php
class Students extends Controller
{

    public function __construct()
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        }
        //new model instance
        $this->postModel = $this->model('Student');
        $this->userModel = $this->model('User');
    }

    public function index()
    {

        $posts = $this->postModel->getPosts();
        $data = [
            'students' => $posts
        ];

        $this->view(SS . '/index', $data);
    }

    //add new post
    public function add()
    {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'title' => trim($_POST['title']),
                'body' => trim($_POST['body']),
                'user_id' => $_SESSION['user_id'],
                'title_err' => '',
                'body_err' => '',
            ];
            $name = $data['title'];
            if (!preg_match("/^[a-zA-z]*$/", $name)) {
                $ErrMsg = "Only alphabets and whitespace are allowed.";
                $data['title_err'] = 'Please enter post title';;
            } else {
                echo $name;
            }

            if (empty($name)) {
                $data['title_err'] = 'Please enter post title';
            }
            if (empty($data['body'])) {
                $data['body_err'] = 'Please enter the post content';
            }

            //validate error free
            if (empty($data['title_err']) && empty($data['body_err'])) {
                if ($this->postModel->addPost($data)) {
                    redirect(SS);
                } else {
                    die('something went wrong');
                }

                //laod view with error
            } else {
                $this->view(SS . '/add', $data);
            }
        } else {
            $data = [
                'title' => (isset($_POST['title']) ? trim($_POST['title']) : ''),
                'body' => (isset($_POST['body']) ? trim($_POST['body']) : '')
            ];

            $this->view(SS . '/add', $data);
        }
    }

    //show single post 
    public function show($id)
    {
        $post = $this->postModel->getPostById($id);
        $user = $this->userModel->getUserById($post->user_id);

        $data = [
            'post' => $post,
            'user' => $user
        ];
        $this->view(SS . '/show', $data);
    }

    //edit post
    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'id' => $id,
                'title' => trim($_POST['title']),
                'body' => trim($_POST['body']),
                'user_id' => $_SESSION['user_id'],
                'title_err' => '',
                'body_err' => '',
            ];
            $title = $data['title'];
            if (!preg_match("/^[a-zA-z]*$/", $title)) {
                $ErrMsg = "Only alphabets and whitespace are allowed.";
                $data['title_err'] = 'Please enter post title';;
            } else {
                echo $title;
            }
            //validate the title
            if (empty($data['title'])) {
                $data['title_err'] = 'Please enter post title';
            }
            //validate the body
            if (empty($data['body'])) {
                $data['body_err'] = 'Please enter the post content';
            }

            //validate error free
            if (empty($data['title_err']) && empty($data['body_err'])) {
                if ($this->postModel->updatePost($data)) {
                    redirect(SS);
                } else {
                    die('something went wrong');
                }

                //laod view with error
            } else {
                $this->view(SS . '/edit', $data);
            }
        } else {
            //check for the owner and call method from post model
            $post = $this->postModel->getPostById($id);
            if ($post->user_id != $_SESSION['user_id']) {
                redirect(SS);
            }
            $data = [
                'id' => $id,
                'title' => $post->title,
                'body' => $post->body
            ];

            $this->view(SS . '/edit', $data);
        }
    }

    //delete post
    public function delete($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //check for owner
            $post = $this->postModel->getPostById($id);
            if ($post->user_id != $_SESSION['user_id']) {
                redirect(SS);
            }

            //call delete method from post model
            if ($this->postModel->deletePost($id)) {
                redirect(SS);
            } else {
                die('something went wrong');
            }
        } else {
            redirect(SS);
        }
    }
}
