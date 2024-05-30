<?php
interface Pokemon {

	/**
	 * どのポケモンも攻撃するしダメージも受ける
	 */
	public function attack();
	public function damage();

	/**
	 * どのポケモンも4つ技がある
	 */
	public function skill1();
	public function skill2();
	public function skill3();
	public function skill4();
}

class Pikachu implements Pokemon
{
	private $_name = '';
	private $_skill1 = [];
	private $_skill2 = [];
	private $_skill3 = [];
	private $_skill4 = [];
	private $_hidenSkill1 = [];

	public function __construct($name)
	{
		$this->_name = $name;
		$this->setSkills();
	}

    public function attack()
    {
        echo '攻撃した！';
    }

    public function damage()
    {
        echo 'ダメージを受けた！';
    }
	
	private function setSkills()
	{
		$this->_skill1 = [
			'name' => '10万ボルト',
			'power' => 100,
		];
		// (skill2~4もセット）
	}
	
	public function skill1()
	{
		echo $this->_skill1['name'] . 'で' . $this->_skill1['power'] . 'ダメージ' . PHP_EOL;
	}
	
	public function skill2()
	{
		echo $this->_skill2['name'] . 'で' . $this->_skill2['power'] . 'ダメージ' . PHP_EOL;
	}
	
	public function skill3()
	{
		echo $this->_skill3['name'] . 'で' . $this->_skill3['power'] . 'ダメージ' . PHP_EOL;
	}
	
	public function skill4()
	{
		echo $this->_skill4['name'] . 'で' . $this->_skill4['power'] . 'ダメージ' . PHP_EOL;
	}
    	
	private function setHiden1Skill()
	{
		$this->_hidenSkill1 = $this->_skill2;
	}
	
	public static function hidenSkill1()
	{
		echo 'いあいぎりで切りまくった！' . PHP_EOL;
	}
}

$pikachu = new Pikachu('ピカピカ');
$pikachu->skill1();

Pikachu::hidenSkill1();
?>
