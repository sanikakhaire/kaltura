<?php

/**
 * Base static class for performing query and update operations on the 'kuser' table.
 *
 * 
 *
 * @package    lib.model.om
 */
abstract class BasekuserPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'propel';

	/** the table name for this class */
	const TABLE_NAME = 'kuser';

	/** the related Propel class for this table */
	const OM_CLASS = 'kuser';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'lib.model.kuser';

	/** the related TableMap class for this table */
	const TM_CLASS = 'kuserTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 42;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the ID field */
	const ID = 'kuser.ID';

	/** the column name for the SCREEN_NAME field */
	const SCREEN_NAME = 'kuser.SCREEN_NAME';

	/** the column name for the FULL_NAME field */
	const FULL_NAME = 'kuser.FULL_NAME';

	/** the column name for the EMAIL field */
	const EMAIL = 'kuser.EMAIL';

	/** the column name for the SHA1_PASSWORD field */
	const SHA1_PASSWORD = 'kuser.SHA1_PASSWORD';

	/** the column name for the SALT field */
	const SALT = 'kuser.SALT';

	/** the column name for the DATE_OF_BIRTH field */
	const DATE_OF_BIRTH = 'kuser.DATE_OF_BIRTH';

	/** the column name for the COUNTRY field */
	const COUNTRY = 'kuser.COUNTRY';

	/** the column name for the STATE field */
	const STATE = 'kuser.STATE';

	/** the column name for the CITY field */
	const CITY = 'kuser.CITY';

	/** the column name for the ZIP field */
	const ZIP = 'kuser.ZIP';

	/** the column name for the URL_LIST field */
	const URL_LIST = 'kuser.URL_LIST';

	/** the column name for the PICTURE field */
	const PICTURE = 'kuser.PICTURE';

	/** the column name for the ICON field */
	const ICON = 'kuser.ICON';

	/** the column name for the ABOUT_ME field */
	const ABOUT_ME = 'kuser.ABOUT_ME';

	/** the column name for the TAGS field */
	const TAGS = 'kuser.TAGS';

	/** the column name for the TAGLINE field */
	const TAGLINE = 'kuser.TAGLINE';

	/** the column name for the NETWORK_HIGHSCHOOL field */
	const NETWORK_HIGHSCHOOL = 'kuser.NETWORK_HIGHSCHOOL';

	/** the column name for the NETWORK_COLLEGE field */
	const NETWORK_COLLEGE = 'kuser.NETWORK_COLLEGE';

	/** the column name for the NETWORK_OTHER field */
	const NETWORK_OTHER = 'kuser.NETWORK_OTHER';

	/** the column name for the MOBILE_NUM field */
	const MOBILE_NUM = 'kuser.MOBILE_NUM';

	/** the column name for the MATURE_CONTENT field */
	const MATURE_CONTENT = 'kuser.MATURE_CONTENT';

	/** the column name for the GENDER field */
	const GENDER = 'kuser.GENDER';

	/** the column name for the REGISTRATION_IP field */
	const REGISTRATION_IP = 'kuser.REGISTRATION_IP';

	/** the column name for the REGISTRATION_COOKIE field */
	const REGISTRATION_COOKIE = 'kuser.REGISTRATION_COOKIE';

	/** the column name for the IM_LIST field */
	const IM_LIST = 'kuser.IM_LIST';

	/** the column name for the VIEWS field */
	const VIEWS = 'kuser.VIEWS';

	/** the column name for the FANS field */
	const FANS = 'kuser.FANS';

	/** the column name for the ENTRIES field */
	const ENTRIES = 'kuser.ENTRIES';

	/** the column name for the STORAGE_SIZE field */
	const STORAGE_SIZE = 'kuser.STORAGE_SIZE';

	/** the column name for the PRODUCED_KSHOWS field */
	const PRODUCED_KSHOWS = 'kuser.PRODUCED_KSHOWS';

	/** the column name for the STATUS field */
	const STATUS = 'kuser.STATUS';

	/** the column name for the CREATED_AT field */
	const CREATED_AT = 'kuser.CREATED_AT';

	/** the column name for the UPDATED_AT field */
	const UPDATED_AT = 'kuser.UPDATED_AT';

	/** the column name for the PARTNER_ID field */
	const PARTNER_ID = 'kuser.PARTNER_ID';

	/** the column name for the DISPLAY_IN_SEARCH field */
	const DISPLAY_IN_SEARCH = 'kuser.DISPLAY_IN_SEARCH';

	/** the column name for the SEARCH_TEXT field */
	const SEARCH_TEXT = 'kuser.SEARCH_TEXT';

	/** the column name for the PARTNER_DATA field */
	const PARTNER_DATA = 'kuser.PARTNER_DATA';

	/** the column name for the PUSER_ID field */
	const PUSER_ID = 'kuser.PUSER_ID';

	/** the column name for the ADMIN_TAGS field */
	const ADMIN_TAGS = 'kuser.ADMIN_TAGS';

	/** the column name for the INDEXED_PARTNER_DATA_INT field */
	const INDEXED_PARTNER_DATA_INT = 'kuser.INDEXED_PARTNER_DATA_INT';

	/** the column name for the INDEXED_PARTNER_DATA_STRING field */
	const INDEXED_PARTNER_DATA_STRING = 'kuser.INDEXED_PARTNER_DATA_STRING';

	/**
	 * An identiy map to hold any loaded instances of kuser objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array kuser[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'ScreenName', 'FullName', 'Email', 'Sha1Password', 'Salt', 'DateOfBirth', 'Country', 'State', 'City', 'Zip', 'UrlList', 'Picture', 'Icon', 'AboutMe', 'Tags', 'Tagline', 'NetworkHighschool', 'NetworkCollege', 'NetworkOther', 'MobileNum', 'MatureContent', 'Gender', 'RegistrationIp', 'RegistrationCookie', 'ImList', 'Views', 'Fans', 'Entries', 'StorageSize', 'ProducedKshows', 'Status', 'CreatedAt', 'UpdatedAt', 'PartnerId', 'DisplayInSearch', 'SearchText', 'PartnerData', 'PuserId', 'AdminTags', 'IndexedPartnerDataInt', 'IndexedPartnerDataString', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'screenName', 'fullName', 'email', 'sha1Password', 'salt', 'dateOfBirth', 'country', 'state', 'city', 'zip', 'urlList', 'picture', 'icon', 'aboutMe', 'tags', 'tagline', 'networkHighschool', 'networkCollege', 'networkOther', 'mobileNum', 'matureContent', 'gender', 'registrationIp', 'registrationCookie', 'imList', 'views', 'fans', 'entries', 'storageSize', 'producedKshows', 'status', 'createdAt', 'updatedAt', 'partnerId', 'displayInSearch', 'searchText', 'partnerData', 'puserId', 'adminTags', 'indexedPartnerDataInt', 'indexedPartnerDataString', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::SCREEN_NAME, self::FULL_NAME, self::EMAIL, self::SHA1_PASSWORD, self::SALT, self::DATE_OF_BIRTH, self::COUNTRY, self::STATE, self::CITY, self::ZIP, self::URL_LIST, self::PICTURE, self::ICON, self::ABOUT_ME, self::TAGS, self::TAGLINE, self::NETWORK_HIGHSCHOOL, self::NETWORK_COLLEGE, self::NETWORK_OTHER, self::MOBILE_NUM, self::MATURE_CONTENT, self::GENDER, self::REGISTRATION_IP, self::REGISTRATION_COOKIE, self::IM_LIST, self::VIEWS, self::FANS, self::ENTRIES, self::STORAGE_SIZE, self::PRODUCED_KSHOWS, self::STATUS, self::CREATED_AT, self::UPDATED_AT, self::PARTNER_ID, self::DISPLAY_IN_SEARCH, self::SEARCH_TEXT, self::PARTNER_DATA, self::PUSER_ID, self::ADMIN_TAGS, self::INDEXED_PARTNER_DATA_INT, self::INDEXED_PARTNER_DATA_STRING, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'screen_name', 'full_name', 'email', 'sha1_password', 'salt', 'date_of_birth', 'country', 'state', 'city', 'zip', 'url_list', 'picture', 'icon', 'about_me', 'tags', 'tagline', 'network_highschool', 'network_college', 'network_other', 'mobile_num', 'mature_content', 'gender', 'registration_ip', 'registration_cookie', 'im_list', 'views', 'fans', 'entries', 'storage_size', 'produced_kshows', 'status', 'created_at', 'updated_at', 'partner_id', 'display_in_search', 'search_text', 'partner_data', 'puser_id', 'admin_tags', 'indexed_partner_data_int', 'indexed_partner_data_string', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'ScreenName' => 1, 'FullName' => 2, 'Email' => 3, 'Sha1Password' => 4, 'Salt' => 5, 'DateOfBirth' => 6, 'Country' => 7, 'State' => 8, 'City' => 9, 'Zip' => 10, 'UrlList' => 11, 'Picture' => 12, 'Icon' => 13, 'AboutMe' => 14, 'Tags' => 15, 'Tagline' => 16, 'NetworkHighschool' => 17, 'NetworkCollege' => 18, 'NetworkOther' => 19, 'MobileNum' => 20, 'MatureContent' => 21, 'Gender' => 22, 'RegistrationIp' => 23, 'RegistrationCookie' => 24, 'ImList' => 25, 'Views' => 26, 'Fans' => 27, 'Entries' => 28, 'StorageSize' => 29, 'ProducedKshows' => 30, 'Status' => 31, 'CreatedAt' => 32, 'UpdatedAt' => 33, 'PartnerId' => 34, 'DisplayInSearch' => 35, 'SearchText' => 36, 'PartnerData' => 37, 'PuserId' => 38, 'AdminTags' => 39, 'IndexedPartnerDataInt' => 40, 'IndexedPartnerDataString' => 41, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'screenName' => 1, 'fullName' => 2, 'email' => 3, 'sha1Password' => 4, 'salt' => 5, 'dateOfBirth' => 6, 'country' => 7, 'state' => 8, 'city' => 9, 'zip' => 10, 'urlList' => 11, 'picture' => 12, 'icon' => 13, 'aboutMe' => 14, 'tags' => 15, 'tagline' => 16, 'networkHighschool' => 17, 'networkCollege' => 18, 'networkOther' => 19, 'mobileNum' => 20, 'matureContent' => 21, 'gender' => 22, 'registrationIp' => 23, 'registrationCookie' => 24, 'imList' => 25, 'views' => 26, 'fans' => 27, 'entries' => 28, 'storageSize' => 29, 'producedKshows' => 30, 'status' => 31, 'createdAt' => 32, 'updatedAt' => 33, 'partnerId' => 34, 'displayInSearch' => 35, 'searchText' => 36, 'partnerData' => 37, 'puserId' => 38, 'adminTags' => 39, 'indexedPartnerDataInt' => 40, 'indexedPartnerDataString' => 41, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::SCREEN_NAME => 1, self::FULL_NAME => 2, self::EMAIL => 3, self::SHA1_PASSWORD => 4, self::SALT => 5, self::DATE_OF_BIRTH => 6, self::COUNTRY => 7, self::STATE => 8, self::CITY => 9, self::ZIP => 10, self::URL_LIST => 11, self::PICTURE => 12, self::ICON => 13, self::ABOUT_ME => 14, self::TAGS => 15, self::TAGLINE => 16, self::NETWORK_HIGHSCHOOL => 17, self::NETWORK_COLLEGE => 18, self::NETWORK_OTHER => 19, self::MOBILE_NUM => 20, self::MATURE_CONTENT => 21, self::GENDER => 22, self::REGISTRATION_IP => 23, self::REGISTRATION_COOKIE => 24, self::IM_LIST => 25, self::VIEWS => 26, self::FANS => 27, self::ENTRIES => 28, self::STORAGE_SIZE => 29, self::PRODUCED_KSHOWS => 30, self::STATUS => 31, self::CREATED_AT => 32, self::UPDATED_AT => 33, self::PARTNER_ID => 34, self::DISPLAY_IN_SEARCH => 35, self::SEARCH_TEXT => 36, self::PARTNER_DATA => 37, self::PUSER_ID => 38, self::ADMIN_TAGS => 39, self::INDEXED_PARTNER_DATA_INT => 40, self::INDEXED_PARTNER_DATA_STRING => 41, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'screen_name' => 1, 'full_name' => 2, 'email' => 3, 'sha1_password' => 4, 'salt' => 5, 'date_of_birth' => 6, 'country' => 7, 'state' => 8, 'city' => 9, 'zip' => 10, 'url_list' => 11, 'picture' => 12, 'icon' => 13, 'about_me' => 14, 'tags' => 15, 'tagline' => 16, 'network_highschool' => 17, 'network_college' => 18, 'network_other' => 19, 'mobile_num' => 20, 'mature_content' => 21, 'gender' => 22, 'registration_ip' => 23, 'registration_cookie' => 24, 'im_list' => 25, 'views' => 26, 'fans' => 27, 'entries' => 28, 'storage_size' => 29, 'produced_kshows' => 30, 'status' => 31, 'created_at' => 32, 'updated_at' => 33, 'partner_id' => 34, 'display_in_search' => 35, 'search_text' => 36, 'partner_data' => 37, 'puser_id' => 38, 'admin_tags' => 39, 'indexed_partner_data_int' => 40, 'indexed_partner_data_string' => 41, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, )
	);

	/**
	 * Translates a fieldname to another type
	 *
	 * @param      string $name field name
	 * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @param      string $toType   One of the class type constants
	 * @return     string translated name of the field.
	 * @throws     PropelException - if the specified name could not be found in the fieldname mappings.
	 */
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	/**
	 * Returns an array of field names.
	 *
	 * @param      string $type The type of fieldnames to return:
	 *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     array A list of field names
	 */

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	/**
	 * Convenience method which changes table.column to alias.column.
	 *
	 * Using this method you can maintain SQL abstraction while using column aliases.
	 * <code>
	 *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
	 *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
	 * </code>
	 * @param      string $alias The alias for the current table.
	 * @param      string $column The column name for current table. (i.e. kuserPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(kuserPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	/**
	 * Add all the columns needed to create a new object.
	 *
	 * Note: any columns that were marked with lazyLoad="true" in the
	 * XML schema will not be added to the select list and only loaded
	 * on demand.
	 *
	 * @param      criteria object containing the columns to add.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function addSelectColumns(Criteria $criteria)
	{
		$criteria->addSelectColumn(kuserPeer::ID);
		$criteria->addSelectColumn(kuserPeer::SCREEN_NAME);
		$criteria->addSelectColumn(kuserPeer::FULL_NAME);
		$criteria->addSelectColumn(kuserPeer::EMAIL);
		$criteria->addSelectColumn(kuserPeer::SHA1_PASSWORD);
		$criteria->addSelectColumn(kuserPeer::SALT);
		$criteria->addSelectColumn(kuserPeer::DATE_OF_BIRTH);
		$criteria->addSelectColumn(kuserPeer::COUNTRY);
		$criteria->addSelectColumn(kuserPeer::STATE);
		$criteria->addSelectColumn(kuserPeer::CITY);
		$criteria->addSelectColumn(kuserPeer::ZIP);
		$criteria->addSelectColumn(kuserPeer::URL_LIST);
		$criteria->addSelectColumn(kuserPeer::PICTURE);
		$criteria->addSelectColumn(kuserPeer::ICON);
		$criteria->addSelectColumn(kuserPeer::ABOUT_ME);
		$criteria->addSelectColumn(kuserPeer::TAGS);
		$criteria->addSelectColumn(kuserPeer::TAGLINE);
		$criteria->addSelectColumn(kuserPeer::NETWORK_HIGHSCHOOL);
		$criteria->addSelectColumn(kuserPeer::NETWORK_COLLEGE);
		$criteria->addSelectColumn(kuserPeer::NETWORK_OTHER);
		$criteria->addSelectColumn(kuserPeer::MOBILE_NUM);
		$criteria->addSelectColumn(kuserPeer::MATURE_CONTENT);
		$criteria->addSelectColumn(kuserPeer::GENDER);
		$criteria->addSelectColumn(kuserPeer::REGISTRATION_IP);
		$criteria->addSelectColumn(kuserPeer::REGISTRATION_COOKIE);
		$criteria->addSelectColumn(kuserPeer::IM_LIST);
		$criteria->addSelectColumn(kuserPeer::VIEWS);
		$criteria->addSelectColumn(kuserPeer::FANS);
		$criteria->addSelectColumn(kuserPeer::ENTRIES);
		$criteria->addSelectColumn(kuserPeer::STORAGE_SIZE);
		$criteria->addSelectColumn(kuserPeer::PRODUCED_KSHOWS);
		$criteria->addSelectColumn(kuserPeer::STATUS);
		$criteria->addSelectColumn(kuserPeer::CREATED_AT);
		$criteria->addSelectColumn(kuserPeer::UPDATED_AT);
		$criteria->addSelectColumn(kuserPeer::PARTNER_ID);
		$criteria->addSelectColumn(kuserPeer::DISPLAY_IN_SEARCH);
		$criteria->addSelectColumn(kuserPeer::SEARCH_TEXT);
		$criteria->addSelectColumn(kuserPeer::PARTNER_DATA);
		$criteria->addSelectColumn(kuserPeer::PUSER_ID);
		$criteria->addSelectColumn(kuserPeer::ADMIN_TAGS);
		$criteria->addSelectColumn(kuserPeer::INDEXED_PARTNER_DATA_INT);
		$criteria->addSelectColumn(kuserPeer::INDEXED_PARTNER_DATA_STRING);
	}

	/**
	 * Returns the number of rows matching criteria.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @return     int Number of matching rows.
	 */
	public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
	{
		// we may modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(kuserPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			kuserPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName
		
		// BasePeer returns a PDOStatement
		$stmt = kuserPeer::doCountStmt($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}
	/**
	 * Method to select one object from the DB.
	 *
	 * @param      Criteria $criteria object used to create the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     kuser
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = kuserPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	/**
	 * Method to do selects.
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     array Array of selected Objects
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelect(Criteria $criteria, PropelPDO $con = null)
	{
		return kuserPeer::populateObjects(kuserPeer::doSelectStmt($criteria, $con));
	}

	public static function alternativeCon($con)
	{
		if($con === null)
			$con = myDbHelper::alternativeCon($con);
			
		if($con === null)
			$con = Propel::getConnection(kuserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		
		return $con;
	}
		
	/**
	 * @var criteriaFilter The default criteria filter.
	 */
	protected static $s_criteria_filter;
	
	public static function  setUseCriteriaFilter ( $use )
	{
		$criteria_filter = kuserPeer::getCriteriaFilter();
		
		if ( $use )  $criteria_filter->enable(); 
		else $criteria_filter->disable();
	}
	
	/**
	 * Returns the default criteria filter
	 *
	 * @return     criteriaFilter The default criteria filter.
	 */
	public static function &getCriteriaFilter()
	{
		if(self::$s_criteria_filter == null)
			kuserPeer::setDefaultCriteriaFilter();
		
		return self::$s_criteria_filter;
	}
	
	 
	/**
	 * Creates default criteria filter
	 */
	public static function setDefaultCriteriaFilter()
	{
		if(self::$s_criteria_filter == null)
			self::$s_criteria_filter = new criteriaFilter();
		
		$c = new myCriteria(); 
		self::$s_criteria_filter->setFilter($c);
	}
	
	
	/**
	 * the filterCriteria will filter out all the doSelect methods - ONLY if the filter is turned on.
	 * IMPORTANT - the filter is turend on by default and when switched off - should be turned on again manually .
	 * 
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 */
	protected static function attachCriteriaFilter(Criteria $criteria)
	{
		kuserPeer::getCriteriaFilter()->applyFilter($criteria);
	}
	
	
	/**
	 * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
	 *
	 * Use this method directly if you want to work with an executed statement durirectly (for example
	 * to perform your own object hydration).
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con The connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     PDOStatement The executed PDOStatement object.
	 * @see        BasePeer::doCount()
	 */
	public static function doCountStmt(Criteria $criteria, PropelPDO $con = null)
	{
		// attach default criteria
		kuserPeer::attachCriteriaFilter($criteria);
		
		// set the connection to slave server
		$con = kuserPeer::alternativeCon ( $con );
		
		// BasePeer returns a PDOStatement
		return BasePeer::doCount($criteria, $con);
	}
	
	
	/**
	 * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
	 *
	 * Use this method directly if you want to work with an executed statement durirectly (for example
	 * to perform your own object hydration).
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con The connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     PDOStatement The executed PDOStatement object.
	 * @see        BasePeer::doSelect()
	 */
	public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
	{
		$con = kuserPeer::alternativeCon($con);
		
		if ($criteria->hasSelectClause()) 
		{
			$asColumns = $criteria->getAsColumns();
			if(count($asColumns) == 1 && isset($asColumns['_score']))
			{
				$criteria = clone $criteria;
				kuserPeer::addSelectColumns($criteria);
			}
		}
		else
		{
			$criteria = clone $criteria;
			kuserPeer::addSelectColumns($criteria);
		}
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		// attach default criteria
		kuserPeer::attachCriteriaFilter($criteria);
		
		// BasePeer returns a PDOStatement
		return BasePeer::doSelect($criteria, $con);
	}
	/**
	 * Adds an object to the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doSelect*()
	 * methods in your stub classes -- you may need to explicitly add objects
	 * to the cache in order to ensure that the same objects are always returned by doSelect*()
	 * and retrieveByPK*() calls.
	 *
	 * @param      kuser $value A kuser object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(kuser $obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getId();
			} // if key === null
			self::$instances[$key] = $obj;
		}
	}

	/**
	 * Removes an object from the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doDelete
	 * methods in your stub classes -- you may need to explicitly remove objects
	 * from the cache in order to prevent returning objects that no longer exist.
	 *
	 * @param      mixed $value A kuser object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof kuser) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or kuser object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
				throw $e;
			}

			unset(self::$instances[$key]);
		}
	} // removeInstanceFromPool()

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
	 * @return     kuser Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
	 * @see        getPrimaryKeyHash()
	 */
	public static function getInstanceFromPool($key)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if (isset(self::$instances[$key])) {
				return self::$instances[$key];
			}
		}
		return null; // just to be explicit
	}
	
	/**
	 * Clear the instance pool.
	 *
	 * @return     void
	 */
	public static function clearInstancePool()
	{
		self::$instances = array();
	}
	
	/**
	 * Method to invalidate the instance pool of all tables related to kuser
	 * by a foreign key with ON DELETE CASCADE
	 */
	public static function clearRelatedInstancePool()
	{
	}

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     string A string version of PK or NULL if the components of primary key in result array are all null.
	 */
	public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
	{
		// If the PK cannot be derived from the row, return NULL.
		if ($row[$startcol] === null) {
			return null;
		}
		return (string) $row[$startcol];
	}

	/**
	 * The returned array will contain objects of the default type or
	 * objects that inherit from the default.
	 *
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function populateObjects(PDOStatement $stmt)
	{
		$results = array();
	
		// set the class once to avoid overhead in the loop
		$cls = kuserPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = kuserPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = kuserPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				kuserPeer::addInstanceToPool($obj, $key);
			} // if key exists
		}
		$stmt->closeCursor();
		return $results;
	}
	/**
	 * Returns the TableMap related to this peer.
	 * This method is not needed for general use but a specific application could have a need.
	 * @return     TableMap
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	/**
	 * Add a TableMap instance to the database for this peer class.
	 */
	public static function buildTableMap()
	{
	  $dbMap = Propel::getDatabaseMap(BasekuserPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BasekuserPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new kuserTableMap());
	  }
	}

	/**
	 * The class that the Peer will make instances of.
	 *
	 * If $withPrefix is true, the returned path
	 * uses a dot-path notation which is tranalted into a path
	 * relative to a location on the PHP include_path.
	 * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
	 *
	 * @param      boolean  Whether or not to return the path wit hthe class name 
	 * @return     string path.to.ClassName
	 */
	public static function getOMClass($withPrefix = true)
	{
		return $withPrefix ? kuserPeer::CLASS_DEFAULT : kuserPeer::OM_CLASS;
	}

	/**
	 * Method perform an INSERT on the database, given a kuser or Criteria object.
	 *
	 * @param      mixed $values Criteria or kuser object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(kuserPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from kuser object
		}

		if ($criteria->containsKey(kuserPeer::ID) && $criteria->keyContainsValue(kuserPeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.kuserPeer::ID.')');
		}


		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		try {
			// use transaction because $criteria could contain info
			// for more than one table (I guess, conceivably)
			$con->beginTransaction();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollBack();
			throw $e;
		}

		return $pk;
	}

	/**
	 * Method perform an UPDATE on the database, given a kuser or Criteria object.
	 *
	 * @param      mixed $values Criteria or kuser object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(kuserPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(kuserPeer::ID);
			$selectCriteria->add(kuserPeer::ID, $criteria->remove(kuserPeer::ID), $comparison);

		} else { // $values is kuser object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the kuser table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(kuserPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(kuserPeer::TABLE_NAME, $con);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			kuserPeer::clearInstancePool();
			kuserPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a kuser or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or kuser object or primary key or array of primary keys
	 *              which is used to create the DELETE statement
	 * @param      PropelPDO $con the connection to use
	 * @return     int 	The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
	 *				if supported by native driver or if emulated using Propel.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	 public static function doDelete($values, PropelPDO $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(kuserPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			kuserPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof kuser) { // it's a model object
			// invalidate the cache for this single object
			kuserPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(kuserPeer::ID, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				kuserPeer::removeInstanceFromPool($singleval);
			}
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; // initialize var to track total num of affected rows

		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			kuserPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given kuser object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      kuser $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(kuser $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(kuserPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(kuserPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach ($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		return BasePeer::doValidate(kuserPeer::DATABASE_NAME, kuserPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     kuser
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = kuserPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		$criteria = new Criteria(kuserPeer::DATABASE_NAME);
		$criteria->add(kuserPeer::ID, $pk);

		$v = kuserPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	/**
	 * Retrieve multiple objects by pkey.
	 *
	 * @param      array $pks List of primary keys
	 * @param      PropelPDO $con the connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function retrieveByPKs($pks, PropelPDO $con = null)
	{
		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(kuserPeer::DATABASE_NAME);
			$criteria->add(kuserPeer::ID, $pks, Criteria::IN);
			$objs = kuserPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BasekuserPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BasekuserPeer::buildTableMap();
