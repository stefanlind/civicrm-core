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
 * Generated from xml/schema/CRM/Mailing/Event/TrackableURLOpen.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */

namespace Civi\Mailing\Event;

require_once 'Civi/Core/Entity.php';

use Doctrine\ORM\Mapping as ORM;
use Civi\API\Annotation as CiviAPI;
use JMS\Serializer\Annotation as JMS;

/**
 * TrackableURLOpen
 *
 * @CiviAPI\Entity("TrackableURLOpen")
 * @CiviAPI\Permission()
 * @ORM\Table(name="civicrm_mailing_event_trackable_url_open", indexes={@ORM\Index(name="FK_civicrm_mailing_event_trackable_url_open_event_queue_id", columns={"event_queue_id"}),@ORM\Index(name="FK_civicrm_mailing_event_trackable_url_open_trackable_url_id", columns={"trackable_url_id"})})
 * @ORM\Entity
 *
 */
class TrackableURLOpen extends \Civi\Core\Entity {

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
   * @var \Civi\Mailing\Event\Queue
   *
   * 
   * @ORM\ManyToOne(targetEntity="Civi\Mailing\Event\Queue")
   * @ORM\JoinColumns({@ORM\JoinColumn(name="event_queue_id", referencedColumnName="id", onDelete="CASCADE")})
   * 
   */
  private $eventQueue;
  
  /**
   * @var \Civi\Mailing\TrackableURL
   *
   * 
   * @ORM\ManyToOne(targetEntity="Civi\Mailing\TrackableURL")
   * @ORM\JoinColumns({@ORM\JoinColumn(name="trackable_url_id", referencedColumnName="id", onDelete="CASCADE")})
   * 
   */
  private $trackableUrl;
  
  /**
   * @var datetime
   *
   * @JMS\Type("datetime")
   * @ORM\Column(name="time_stamp", type="datetime", nullable=false)
   * 
   * 
   */
  private $timeStamp;

  /**
   * Get id
   *
   * @return integer
   */
  public function getId() {
    return $this->id;
  }
    
  /**
   * Set eventQueue
   *
   * @param \Civi\Mailing\Event\Queue $eventQueue
   * @return TrackableURLOpen
   */
  public function setEventQueue(\Civi\Mailing\Event\Queue $eventQueue = null) {
    $this->eventQueue = $eventQueue;
    return $this;
  }

  /**
   * Get eventQueue
   *
   * @return \Civi\Mailing\Event\Queue
   */
  public function getEventQueue() {
    return $this->eventQueue;
  }
  
  /**
   * Set trackableUrl
   *
   * @param \Civi\Mailing\TrackableURL $trackableUrl
   * @return TrackableURLOpen
   */
  public function setTrackableUrl(\Civi\Mailing\TrackableURL $trackableUrl = null) {
    $this->trackableUrl = $trackableUrl;
    return $this;
  }

  /**
   * Get trackableUrl
   *
   * @return \Civi\Mailing\TrackableURL
   */
  public function getTrackableUrl() {
    return $this->trackableUrl;
  }
  
  /**
   * Set timeStamp
   *
   * @param datetime $timeStamp
   * @return TrackableURLOpen
   */
  public function setTimeStamp($timeStamp) {
    $this->timeStamp = $timeStamp;
    return $this;
  }

  /**
   * Get timeStamp
   *
   * @return datetime
   */
  public function getTimeStamp() {
    return $this->timeStamp;
  }

  /**
   * returns all the column names of this table
   *
   * @access public
   * @return array
   */
  public static $_fields = NULL;

  static function &fields( ) {
    if ( !self::$_fields) {
      self::$_fields = array (
      
              'id' => array(
      
        'name' => 'id',
        'propertyName' => 'id',
        'type' => \CRM_Utils_Type::T_INT,
                        'required' => true,
                                             
                                    
                          ),
      
              'event_queue_id' => array(
      
        'name' => 'event_queue_id',
        'propertyName' => 'eventQueue',
        'type' => \CRM_Utils_Type::T_INT,
                        'required' => true,
                                             
                                    
                'FKClassName' => 'Civi_Mailing_Event_Queue',
                          ),
      
              'trackable_url_id' => array(
      
        'name' => 'trackable_url_id',
        'propertyName' => 'trackableUrl',
        'type' => \CRM_Utils_Type::T_INT,
                        'required' => true,
                                             
                                    
                'FKClassName' => 'Civi_Mailing_TrackableURL',
                          ),
      
              'time_stamp' => array(
      
        'name' => 'time_stamp',
        'propertyName' => 'timeStamp',
        'type' => \CRM_Utils_Type::T_DATE + \CRM_Utils_Type::T_TIME,
                'title' => ts('Time Stamp'),
                        'required' => true,
                                             
                                    
                          ),
             );
    }
    return self::$_fields;
  }

}
