<?php

class Book {

	protected $title;
	protected $author;
	protected $genre;
	protected $id;
	protected $publishDate;

	

	public function build(Builder $builder) {
		$this->title = $builder->getTitle();
		$this->author = $builder->getAuthor();
		$this->genre = $builder->getGenre();
		$this->id = $builder->getId();
		$this->publishDate = $builder->getPublishDate();
	}
}
class Builder {

		//required
		protected $title;
		protected $author;

		//optional
		protected $genre = 'comedy';
		protected $id = '00000000';
		protected $publishDate = '1900/1/1';

		public function __construct($title, $author) {
			$this->title = $title;
			$this->author = $author;
		}

		public function genre($genre) {
			$this->genre = $genre;
			return $this;
		}

		public function id($id) {
			$this->id = $id;
			return $this;
		}

		public function publishDate($publishDate) {
			$this->publishDate = $publishDate;
			return $this;
		}

		public function getTitle() {
			return $this->title;
		}
		public function getAuthor() {
			return $this->author;
		}
		public function getGenre() {
			return $this->genre;
		}
		public function getId() {
			return $this->id;
		}
		public function getPublishDate() {
			return $this->publishDate;
		}
	}
$builder = new Builder('oop', 'binh');
$builder->genre('action')->id('111111')->publishDate('14/5/2015');
$book = new Book;
$book->build($builder);
var_dump($book);
