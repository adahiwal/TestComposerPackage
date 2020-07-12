<?php

namespace pkgad;

class Hello {
	
	protected $m_strName;
	
	public function setName( $strName ) {
		$this->m_strName = $strName;
	}

	public function getName() {
		return $this->m_strName;
	}
	
	public function display() {
		echo "Hello " . $this->getName();
	}
	
}
?>
