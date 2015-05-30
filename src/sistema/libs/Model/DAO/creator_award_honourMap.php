<?php
/** @package    Sistema::Model::DAO */

/** import supporting libraries */
require_once("verysimple/Phreeze/IDaoMap.php");
require_once("verysimple/Phreeze/IDaoMap2.php");

/**
 * creator_award_honourMap is a static class with functions used to get FieldMap and KeyMap information that
 * is used by Phreeze to map the creator_award_honourDAO to the creator_award_honour datastore.
 *
 * WARNING: THIS IS AN AUTO-GENERATED FILE
 *
 * This file should generally not be edited by hand except in special circumstances.
 * You can override the default fetching strategies for KeyMaps in _config.php.
 * Leaving this file alone will allow easy re-generation of all DAOs in the event of schema changes
 *
 * @package Sistema::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class creator_award_honourMap implements IDaoMap, IDaoMap2
{

	private static $KM;
	private static $FM;
	
	/**
	 * {@inheritdoc}
	 */
	public static function AddMap($property,FieldMap $map)
	{
		self::GetFieldMaps();
		self::$FM[$property] = $map;
	}
	
	/**
	 * {@inheritdoc}
	 */
	public static function SetFetchingStrategy($property,$loadType)
	{
		self::GetKeyMaps();
		self::$KM[$property]->LoadType = $loadType;
	}

	/**
	 * {@inheritdoc}
	 */
	public static function GetFieldMaps()
	{
		if (self::$FM == null)
		{
			self::$FM = Array();
			self::$FM["Id"] = new FieldMap("Id","creator_award_honour","id",true,FM_TYPE_INT,11,null,true);
			self::$FM["Description"] = new FieldMap("Description","creator_award_honour","description",false,FM_TYPE_VARCHAR,100,null,false);
			self::$FM["Grantedby"] = new FieldMap("Grantedby","creator_award_honour","grantedby",false,FM_TYPE_VARCHAR,100,null,false);
			self::$FM["Title"] = new FieldMap("Title","creator_award_honour","title",false,FM_TYPE_VARCHAR,100,null,false);
			self::$FM["Type"] = new FieldMap("Type","creator_award_honour","type",false,FM_TYPE_VARCHAR,100,null,false);
			self::$FM["Creator"] = new FieldMap("Creator","creator_award_honour","creator",false,FM_TYPE_INT,11,null,false);
		}
		return self::$FM;
	}

	/**
	 * {@inheritdoc}
	 */
	public static function GetKeyMaps()
	{
		if (self::$KM == null)
		{
			self::$KM = Array();
			self::$KM["FK_qr69vjpxl6txy39isg3fpmx6q"] = new KeyMap("FK_qr69vjpxl6txy39isg3fpmx6q", "Creator", "Creator", "Idcreator", KM_TYPE_MANYTOONE, KM_LOAD_LAZY); // you change to KM_LOAD_EAGER here or (preferrably) make the change in _config.php
		}
		return self::$KM;
	}

}

?>