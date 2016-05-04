<?php

namespace CSSMagic;

/**
 * Representa uma regra CSS
 */
class Rule{
	
	/**
	 * A tag CSS
	 */
	protected $rule_id = '';
	
	/**
	 * O valor da tag CSS
	 */
	protected $rule_value = '';
	
	/**
	 * Construtor da classe
	 * @param string $rule_id A tag CSS.
	 * @param string $rule_value Opcional. O valor da tag CSS.
	 * @return void
	 */
	public function __construct(string $rule_id, string $rule_value = ''){
		$this->rule_id = $rule_id;
		$this->setRuleValue($rule_value);
	}
	
	/**
	 * Retorna a tag CSS.
	 * @return string
	 */
	public function getRuleId() : string {
		return $this->rule_id;
	}
	
	/**
	 * Retorna o valor da tag CSS.
	 * @return string
	 */
	public function getRuleValue() : string {
		return $this->rule_value;
	}
	
	/**
	 * Retorna o para {@link self::rule_id} => {@link self::rule_value}
	 * @return array
	 */
	public function getRule() : array {
		return [$this->rule_id => $this->rule_value];
	}
	
	/**
	 * Define um valor para a tag CSS
	 * @param string $rule_value O valro da tag CSS
	 * @return void
	 */
	public function setRuleValue(string $rule_value){
		$this->rule_value = $rule_value;
	}
}
