<?

class DUK {
  private $userId;
  
  private $characterName;

  private $race;
  private $class;
  private $hierarchy;
  private $origin;
  private $deity;
  private $element;
  private $emptyCrystals;
  private $filledCrystals;
  private $hitPoints;
  private $armourPoints;
  private $mana;
  private $attendedEventIds;
  private $totalExperiencePoints;
  private $usedExperiencePoints;

  private $hierarchySkillIds;
  private $skillIds;
  private $spellIds;

  private $background;

	/**
	 * @param mixed $userId
	 *
	 * @return DUK
	 */
	public function setUserId( $userId ) {
		$this->userId = $userId;

		return $this;
	}

	/**
	 * @param mixed $characterName
	 *
	 * @return DUK
	 */
	public function setCharacterName( $characterName ) {
		$this->characterName = $characterName;

		return $this;
	}

	/**
	 * @param mixed $race
	 *
	 * @return DUK
	 */
	public function setRace( $race ) {
		$this->race = $race;

		return $this;
	}

	/**
	 * @param mixed $class
	 *
	 * @return DUK
	 */
	public function setClass( $class ) {
		$this->class = $class;

		return $this;
	}

	/**
	 * @param mixed $hierarchy
	 *
	 * @return DUK
	 */
	public function setHierarchy( $hierarchy ) {
		$this->hierarchy = $hierarchy;

		return $this;
	}

	/**
	 * @param mixed $origin
	 *
	 * @return DUK
	 */
	public function setOrigin( $origin ) {
		$this->origin = $origin;

		return $this;
	}

	/**
	 * @param mixed $deity
	 *
	 * @return DUK
	 */
	public function setDeity( $deity ) {
		$this->deity = $deity;

		return $this;
	}

	/**
	 * @param mixed $element
	 *
	 * @return DUK
	 */
	public function setElement( $element ) {
		$this->element = $element;

		return $this;
	}

	/**
	 * @param mixed $emptyCrystals
	 *
	 * @return DUK
	 */
	public function setEmptyCrystals( $emptyCrystals ) {
		$this->emptyCrystals = $emptyCrystals;

		return $this;
	}

	/**
	 * @param mixed $filledCrystals
	 *
	 * @return DUK
	 */
	public function setFilledCrystals( $filledCrystals ) {
		$this->filledCrystals = $filledCrystals;

		return $this;
	}

	/**
	 * @param mixed $hitPoints
	 *
	 * @return DUK
	 */
	public function setHitPoints( $hitPoints ) {
		$this->hitPoints = $hitPoints;

		return $this;
	}

	/**
	 * @param mixed $armourPoints
	 *
	 * @return DUK
	 */
	public function setArmourPoints( $armourPoints ) {
		$this->armourPoints = $armourPoints;

		return $this;
	}

	/**
	 * @param mixed $mana
	 *
	 * @return DUK
	 */
	public function setMana( $mana ) {
		$this->mana = $mana;

		return $this;
	}

	/**
	 * @param mixed $attendedEventIds
	 *
	 * @return DUK
	 */
	public function setAttendedEventIds( $attendedEventIds ) {
		$this->attendedEventIds = $attendedEventIds;

		return $this;
	}

	/**
	 * @param mixed $totalExperiencePoints
	 *
	 * @return DUK
	 */
	public function setTotalExperiencePoints( $totalExperiencePoints ) {
		$this->totalExperiencePoints = $totalExperiencePoints;

		return $this;
	}

	/**
	 * @param mixed $usedExperiencePoints
	 *
	 * @return DUK
	 */
	public function setUsedExperiencePoints( $usedExperiencePoints ) {
		$this->usedExperiencePoints = $usedExperiencePoints;

		return $this;
	}

	/**
	 * @param mixed $hierarchySkillIds
	 *
	 * @return DUK
	 */
	public function setHierarchySkillIds( $hierarchySkillIds ) {
		$this->hierarchySkillIds = $hierarchySkillIds;

		return $this;
	}

	/**
	 * @param mixed $skillIds
	 *
	 * @return DUK
	 */
	public function setSkillIds( $skillIds ) {
		$this->skillIds = $skillIds;

		return $this;
	}

	/**
	 * @param mixed $spellIds
	 *
	 * @return DUK
	 */
	public function setSpellIds( $spellIds ) {
		$this->spellIds = $spellIds;

		return $this;
	}

	/**
	 * @param mixed $background
	 *
	 * @return DUK
	 */
	public function setBackground( $background ) {
		$this->background = $background;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getUserId() {
		return $this->userId;
	}

	/**
	 * @return mixed
	 */
	public function getCharacterName() {
		return $this->characterName;
	}

	/**
	 * @return mixed
	 */
	public function getRace() {
		return $this->race;
	}

	/**
	 * @return mixed
	 */
	public function getClass() {
		return $this->class;
	}

	/**
	 * @return mixed
	 */
	public function getHierarchy() {
		return $this->hierarchy;
	}

	/**
	 * @return mixed
	 */
	public function getOrigin() {
		return $this->origin;
	}

	/**
	 * @return mixed
	 */
	public function getDeity() {
		return $this->deity;
	}

	/**
	 * @return mixed
	 */
	public function getElement() {
		return $this->element;
	}

	/**
	 * @return mixed
	 */
	public function getEmptyCrystals() {
		return $this->emptyCrystals;
	}

	/**
	 * @return mixed
	 */
	public function getFilledCrystals() {
		return $this->filledCrystals;
	}

	/**
	 * @return mixed
	 */
	public function getHitPoints() {
		return $this->hitPoints;
	}

	/**
	 * @return mixed
	 */
	public function getArmourPoints() {
		return $this->armourPoints;
	}

	/**
	 * @return mixed
	 */
	public function getMana() {
		return $this->mana;
	}

	/**
	 * @return mixed
	 */
	public function getAttendedEventIds() {
		return $this->attendedEventIds;
	}

	/**
	 * @return mixed
	 */
	public function getTotalExperiencePoints() {
		return $this->totalExperiencePoints;
	}

	/**
	 * @return mixed
	 */
	public function getUsedExperiencePoints() {
		return $this->usedExperiencePoints;
	}

	/**
	 * @return mixed
	 */
	public function getHierarchySkillIds() {
		return $this->hierarchySkillIds;
	}

	/**
	 * @return mixed
	 */
	public function getSkillIds() {
		return $this->skillIds;
	}

	/**
	 * @return mixed
	 */
	public function getSpellIds() {
		return $this->spellIds;
	}

	/**
	 * @return mixed
	 */
	public function getBackground() {
		return $this->background;
	}
	
	

}

?>