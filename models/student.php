<?php
class ShareModel extends Model
{
	public function Index()
	{
		$this->query('SELECT * FROM students ');
		$rows = $this->resultSet();
		return $rows;
	}

	public function add()
	{
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if ($post['submit']) {
			if ($post['name'] == '' || $post['major'] == '' || $post['age'] == '') {
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}
			// Insert into MySQL
			$this->query('INSERT INTO students (name, age, major) VALUES(:name, :age, :major)');
			$this->bind(':name', $post['name']);
			$this->bind(':age', $post['age']);
			$this->bind(':major', $post['major']);
			$this->execute();
			// Verify
			if ($this->lastInsertId()) {
				// Redirect
				header('Location: ' . ROOT_URL . 'students');
			}
		}
		return;
	}

	public function delete()
	{
		// Sanitize POST
		if ($_POST['delete']) {
			$this->query('DELETE FROM students WHERE id =:id');
			$this->bind(':id', $_POST['id']);
			$this->execute();
			// Verify
			if ($this->lastInsertId()) {
				// Redirect
				header('Location: ' . ROOT_URL . 'students');
			} else {
				header('Location: ' . ROOT_URL . 'students');
			}
		}
		return;
	}


	public function update()
	{
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

	
		// Sanitize POST
		if (isset($post['submit'])) {
			$this->query('UPDATE students SET name = :name, major = :major,age = :age WHERE id=:id');
			$this->bind(':name', $post['name']);
			$this->bind(':major', $post['major']);
			$this->bind(':age', $post['age']);
			$this->bind(':id', $post['id']);
			$this->execute();
			// Verify
			if ($this->lastInsertId()) {
				// Redirect
				header('Location: ' . ROOT_URL . 'students');
			} else {
				header('Location: ' . ROOT_URL . 'students');
			}
		}
		
		return;
	}
}
