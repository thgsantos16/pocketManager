<?php

// Controling the Routes
class Routes {

	public $url;
	public $attr = "";
	public $title;
	public $file;
	public $lvl = "";

	function __construct() {
		$this->url = str_replace("/".FOLDER."/", "", $_SERVER['REQUEST_URI']);
		$this->getLvl();
		$this->getPage();
		$this->getTitle();
	}

	function getLvl() {
		$tmp = substr_count($this->url, "/");
		if($tmp == 0) $this->lvl = "./";
		else $this->lvl = str_pad($this->lvl, 3*$tmp, "../");
	}

	function getTitle() {
		if(isset($title[$this->file])) $this->title = $title[$this->file]." | ".SITE_TITLE;
		else $this->title = SITE_TITLE;
	}

	function getPage() {
		$tmp = "";
		if(empty($this->url)) $this->file = "root";
		else {
			$tmp = explode("/", $this->url);
			$this->file = $tmp[0];

			if(count($tmp) > 1) {
				unset($tmp[0]);
				$this->attr = implode("/", $tmp);
			}

			if(!file_exists($this->file.".php")) {
				if($this->not_a_card()) $this->file = "404";
			}
		}
	}

	function not_a_card() {
		return true;
	}
}


// HTML Building
class HtmlHelper {

	function __construct() {

	}

	function link($target, $element, $args, $text = null) {
		if($element == "img") {
			$attr = "";
			if(isset($args['src'])) $attr .= ' src="'.$args['src'].'"';
			if(isset($args['id'])) $attr .= ' id="'.$args['id'].'"';
			if(isset($args['style'])) $attr .= ' style="'.$args['style'].'"';
			return "<img".$attr." onclick='navigate(`".$target."`)'>";
		}

		else if($element == "a") {
			$attr = "";
			if(isset($args['href'])) $attr .= ' href="'.$args['href'].'"';
			if(isset($args['id'])) $attr .= ' id="'.$args['id'].'"';
			if(isset($args['style'])) $attr .= ' style="'.$args['style'].'"';
			return "<a".$attr." onclick='navigate(`".$target."`)'>".$text."</a>";
		}
		else if($element == "button") {
			$attr = "";
			if(isset($args['href'])) $attr .= ' href="'.$args['href'].'"';
			if(isset($args['id'])) $attr .= ' id="'.$args['id'].'"';
			if(isset($args['style'])) $attr .= ' style="'.$args['style'].'"';
			return "<button".$attr." onclick='".$target."'>".$text."</button>";
		}
	}

}



