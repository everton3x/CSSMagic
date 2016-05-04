<?php

namespace CSSMagic;

/**
 * Representa um tema CSS
 */
class Theme{
	
	/**
	 * Um nome para o tema
	 */
	protected $theme_name = '';
	
	/**
	 * Os seletores do tema
	 */
	protected $selectors = [];
	
	/**
	 * Construtor da classe.
	 * @param string $theme_name O nome do tema.
	 * @return void
	 */
	public function __construct(string $theme_name){
		$this->theme_name = $theme_name;
	}
	
	/**
	 * Retorna o nome do tema.
	 * @return string
	 */
	public function getThemeName() : string {
		return $this->theme_name;
	}
	
	/**
	 * Adiciona um seletor no tema.
	 * @param {@link CSSMagic\Selector} $seletor Uma instƒncia de {@link CSSMagic\Selector}
	 * @return void
	 */
	public function addSelector(Selector $selector){
		$this->selectors[$selector->getSelectorId()] = $selector;
	}
	
	/**
	 * Retorna um array com todos os seletores.
	 * @return array
	 */
	public function getAllSelectors() : array {
		return $this->selectors;
	}
	
	/**
	 * Retorna um determinado seletor identificado por $selector_id.
	 * @param string $selector_id A identifica‡Æo do seletor.
	 * @return {@link CSSMagic\Selector}
	 */
	public function getSelector(string $selector_id) : CSSMagic\Selector {
		return $this->selectors[$selector_id];
	}
	
	/**
	 * Verifica se determinado seletor existe.
	 * @param string $selector_id A identifica‡Æo do seletor.
	 * @return boolean
	 */
	public function hasSelector(string $selector_id) : boolean {
		return key_exists($selector_id, $this->selectors);
	}
	
	/**
	 * Remove determinado seletor.
	 * @param string $seletor_id A identifica‡Æo do seletor para remover.
	 * @return void
	 */
	public function removeSelector(string $selector_id){
		unset($this->selectors[$selector_id]);
	}
	
	/**
	 * Gera o c¢digo CSS do tema.
	 * @return string
	 */
	public function getThemeString(){
		$css_str = '/* Gerado com o CSSMagic :-)'.PHP_EOL;
		$css_str .= " * {$this->getThemeName()}".PHP_EOL;
		$css_str .= " */".PHP_EOL.PHP_EOL;
		
		foreach($this->selectors as $selector){
			$css_str .= $selector->getSelectorId().' ';
			$css_str .= '{'.PHP_EOL;
			
			$rules = $selector->getAllRules();
			foreach($rules as $rule){
				$css_str .= "\t{$rule->getRuleId()}: {$rule->getRuleValue()};".PHP_EOL;
			}
			
			$css_str .= '}'.PHP_EOL;
			
			$css_str .= PHP_EOL;
		}
		
		return $css_str;
	}

}
