<?php
/*
 +--------------------------------------------------------------------+
 | CiviCRM version 4.4                                                |
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC (c) 2004-2013                                |
 +--------------------------------------------------------------------+
 | This file is a part of CiviCRM.                                    |
 |                                                                    |
 | CiviCRM is free software; you can copy, modify, and distribute it  |
 | under the terms of the GNU Affero General Public License           |
 | Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
 |                                                                    |
 | CiviCRM is distributed in the hope that it will be useful, but     |
 | WITHOUT ANY WARRANTY; without even the implied warranty of         |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
 | See the GNU Affero General Public License for more details.        |
 |                                                                    |
 | You should have received a copy of the GNU Affero General Public   |
 | License and the CiviCRM Licensing Exception along                  |
 | with this program; if not, contact CiviCRM LLC                     |
 | at info[AT]civicrm[DOT]org. If you have questions about the        |
 | GNU Affero General Public License or the licensing of CiviCRM,     |
 | see the CiviCRM license FAQ at http://civicrm.org/licensing        |
 +--------------------------------------------------------------------+
*/

/**
 *
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2013
 *
 * Generated from xml/schema/CRM/Financial/FinancialType.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */

namespace Civi\Financial;

require_once 'Civi/Core/Entity.php';

use Doctrine\ORM\Mapping as ORM;
use Civi\API\Annotation as CiviAPI;
use JMS\Serializer\Annotation as JMS;

/**
 * FinancialType
 *
 * @CiviAPI\Entity("FinancialType")
 * @CiviAPI\Permission()
 * @ORM\Table(name="civicrm_financial_type", uniqueConstraints={@ORM\UniqueConstraint(name="UI_id", columns={"id"})})
 * @ORM\Entity
 *
 */
class FinancialType extends \Civi\Core\Entity {

  /**
   * @var integer
   *
   * @JMS\Type("integer")
   * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned":true} )
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="IDENTITY")
   */
  private $id;
    
  /**
   * @var string
   *
   * @JMS\Type("string")
   * @ORM\Column(name="name", type="string", length=64, nullable=true)
   * 
   */
  private $name;
  
  /**
   * @var string
   *
   * @JMS\Type("string")
   * @ORM\Column(name="description", type="string", length=255, nullable=true)
   * 
   */
  private $description;
  
  /**
   * @var boolean
   *
   * @JMS\Type("boolean")
   * @ORM\Column(name="is_deductible", type="boolean", nullable=false)
   * 
   */
  private $isDeductible = '1';
  
  /**
   * @var boolean
   *
   * @JMS\Type("boolean")
   * @ORM\Column(name="is_reserved", type="boolean", nullable=true)
   * 
   */
  private $isReserved;
  
  /**
   * @var boolean
   *
   * @JMS\Type("boolean")
   * @ORM\Column(name="is_active", type="boolean", nullable=true)
   * 
   */
  private $isActive;

  /**
   * Get id
   *
   * @return integer
   */
  public function getId() {
    return $this->id;
  }
    
  /**
   * Set name
   *
   * @param string $name
   * @return FinancialType
   */
  public function setName($name) {
    $this->name = $name;
    return $this;
  }

  /**
   * Get name
   *
   * @return string
   */
  public function getName() {
    return $this->name;
  }
  
  /**
   * Set description
   *
   * @param string $description
   * @return FinancialType
   */
  public function setDescription($description) {
    $this->description = $description;
    return $this;
  }

  /**
   * Get description
   *
   * @return string
   */
  public function getDescription() {
    return $this->description;
  }
  
  /**
   * Set isDeductible
   *
   * @param boolean $isDeductible
   * @return FinancialType
   */
  public function setIsDeductible($isDeductible) {
    $this->isDeductible = $isDeductible;
    return $this;
  }

  /**
   * Get isDeductible
   *
   * @return boolean
   */
  public function getIsDeductible() {
    return $this->isDeductible;
  }
  
  /**
   * Set isReserved
   *
   * @param boolean $isReserved
   * @return FinancialType
   */
  public function setIsReserved($isReserved) {
    $this->isReserved = $isReserved;
    return $this;
  }

  /**
   * Get isReserved
   *
   * @return boolean
   */
  public function getIsReserved() {
    return $this->isReserved;
  }
  
  /**
   * Set isActive
   *
   * @param boolean $isActive
   * @return FinancialType
   */
  public function setIsActive($isActive) {
    $this->isActive = $isActive;
    return $this;
  }

  /**
   * Get isActive
   *
   * @return boolean
   */
  public function getIsActive() {
    return $this->isActive;
  }

  /**
   * returns all the column names of this table
   *
   * @access public
   * @return array
   */
  static function &fields( ) {
    if ( !self::$_fields) {
      self::$_fields = array (
      
              'id' => array(
      
        'name' => 'id',
        'type' => CRM_Utils_Type::T_INT,
                        'required' => true,
                                             
                                    
                          ),
      
              'financial_type' => array(
      
        'name' => 'name',
        'type' => CRM_Utils_Type::T_STRING,
                'title' => ts('Financial Type'),
                        'required' => true,
                         'maxlength' => 64,
                         'size' => CRM_Utils_Type::BIG,
                           
                'import' => true,
        'where' => 'civicrm_financial_type.name',
        'headerPattern' => '/(finan(cial)?)?type/i',
        'dataPattern' => '/donation|member|campaign/i',
                         'export' => true,
                                   
                          ),
      
              'description' => array(
      
        'name' => 'description',
        'type' => CRM_Utils_Type::T_STRING,
                'title' => ts('Description'),
                                 'maxlength' => 255,
                         'size' => CRM_Utils_Type::HUGE,
                           
                                    
                          ),
      
              'is_deductible' => array(
      
        'name' => 'is_deductible',
        'type' => CRM_Utils_Type::T_BOOLEAN,
                                                     
                                           'default' => '1',
         
                          ),
      
              'is_reserved' => array(
      
        'name' => 'is_reserved',
        'type' => CRM_Utils_Type::T_BOOLEAN,
                                                     
                                    
                          ),
      
              'is_active' => array(
      
        'name' => 'is_active',
        'type' => CRM_Utils_Type::T_BOOLEAN,
                                                     
                                    
                          ),
             );
    }
    return self::$_fields;
  }

}
