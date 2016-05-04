<?php

namespace CSSMagic;

/**
 * Representa um seletor CSS
 */
class Selector{
	
	/**
	 * O seletor
	 */
	protected $selector_id = '';
	
	/**
	 * O conjunto de regras CSS do seletor.
	 */
	protected $rules = [];
	
	/**
	 * Construtor da classe.
	 * @param string $selector_id O seletor CSS
	 * @return void
	 */
	public function __construct(string $selector_id){
		$this->selector_id = $selector_id;
	}
	
	/**
	 * Retorna o seletor
	 * @return string
	 */
	public function getSelectorId() : string {
		return $this->selector_id;
	}
	
	/**
	 * Adiciona uma nova regra ao seletor.
	 * @param {@link CSSMagic\Rule} $rule Uma instƒncia de {@link CSSMagic\Rule}
	 * @return void
	 */
	public function addRule(Rule $rule){
		$this->rules[$rule->getRuleId()] = $rule;
	}
	
	/**
	 * Retorna todas as regras.
	 * @return array
	 */
	public function getAllRules() : array {
		return $this->rules;
	}
	
	/**
	 * Retorna uma regra espec¡fica.
	 * @param string $rule_id A tag CSS da regra.
	 * @return {@link CSSMagic\Rule}
	 */
	public function getRule(string $rule_id) : CSSMagic\Rule {
		return $this->rules[$rule_id];
	}
	
	/**
	 * Verifica se determinada regra existe.
	 * @param string $rule_id A tag CSS da regra.
	 * @return boolean
	 */
	public function hasRule(string $rule_id) : boolean {
		return key_exists($rule_id, $this->rules);
	}
	
	/**
	 * Remove determinada regra.
	 * @param string $rule_id A tag CSS da regra.
	 * @return void
	 */
	public function removeRule(string $rule_id){
		unset($this->rules[$rule_id]);
	}
}
