<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsRelatieOngewensteGroepensnk;
use PharmaIntelligence\GstandaardBundle\Model\GsRelatieOngewensteGroepensnkPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsRelatieOngewensteGroepensnkTableMap;

abstract class BaseGsRelatieOngewensteGroepensnkPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_relatie_ongewenste_groepensnk';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsRelatieOngewensteGroepensnk';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsRelatieOngewensteGroepensnkTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 5;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 5;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_relatie_ongewenste_groepensnk.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_relatie_ongewenste_groepensnk.mutatiekode';

    /** the column name for the stamnaamcode field */
    const STAMNAAMCODE = 'gs_relatie_ongewenste_groepensnk.stamnaamcode';

    /** the column name for the ongewenste_groepen_thesaurus_122 field */
    const ONGEWENSTE_GROEPEN_THESAURUS_122 = 'gs_relatie_ongewenste_groepensnk.ongewenste_groepen_thesaurus_122';

    /** the column name for the ongewenste_groepsnummer field */
    const ONGEWENSTE_GROEPSNUMMER = 'gs_relatie_ongewenste_groepensnk.ongewenste_groepsnummer';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsRelatieOngewensteGroepensnk objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsRelatieOngewensteGroepensnk[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsRelatieOngewensteGroepensnkPeer::$fieldNames[GsRelatieOngewensteGroepensnkPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'Stamnaamcode', 'OngewensteGroepenThesaurus122', 'OngewensteGroepsnummer', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'stamnaamcode', 'ongewensteGroepenThesaurus122', 'ongewensteGroepsnummer', ),
        BasePeer::TYPE_COLNAME => array (GsRelatieOngewensteGroepensnkPeer::BESTANDNUMMER, GsRelatieOngewensteGroepensnkPeer::MUTATIEKODE, GsRelatieOngewensteGroepensnkPeer::STAMNAAMCODE, GsRelatieOngewensteGroepensnkPeer::ONGEWENSTE_GROEPEN_THESAURUS_122, GsRelatieOngewensteGroepensnkPeer::ONGEWENSTE_GROEPSNUMMER, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'STAMNAAMCODE', 'ONGEWENSTE_GROEPEN_THESAURUS_122', 'ONGEWENSTE_GROEPSNUMMER', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'stamnaamcode', 'ongewenste_groepen_thesaurus_122', 'ongewenste_groepsnummer', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsRelatieOngewensteGroepensnkPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'Stamnaamcode' => 2, 'OngewensteGroepenThesaurus122' => 3, 'OngewensteGroepsnummer' => 4, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'stamnaamcode' => 2, 'ongewensteGroepenThesaurus122' => 3, 'ongewensteGroepsnummer' => 4, ),
        BasePeer::TYPE_COLNAME => array (GsRelatieOngewensteGroepensnkPeer::BESTANDNUMMER => 0, GsRelatieOngewensteGroepensnkPeer::MUTATIEKODE => 1, GsRelatieOngewensteGroepensnkPeer::STAMNAAMCODE => 2, GsRelatieOngewensteGroepensnkPeer::ONGEWENSTE_GROEPEN_THESAURUS_122 => 3, GsRelatieOngewensteGroepensnkPeer::ONGEWENSTE_GROEPSNUMMER => 4, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'STAMNAAMCODE' => 2, 'ONGEWENSTE_GROEPEN_THESAURUS_122' => 3, 'ONGEWENSTE_GROEPSNUMMER' => 4, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'stamnaamcode' => 2, 'ongewenste_groepen_thesaurus_122' => 3, 'ongewenste_groepsnummer' => 4, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = GsRelatieOngewensteGroepensnkPeer::getFieldNames($toType);
        $key = isset(GsRelatieOngewensteGroepensnkPeer::$fieldKeys[$fromType][$name]) ? GsRelatieOngewensteGroepensnkPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsRelatieOngewensteGroepensnkPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, GsRelatieOngewensteGroepensnkPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsRelatieOngewensteGroepensnkPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsRelatieOngewensteGroepensnkPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsRelatieOngewensteGroepensnkPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(GsRelatieOngewensteGroepensnkPeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsRelatieOngewensteGroepensnkPeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsRelatieOngewensteGroepensnkPeer::STAMNAAMCODE);
            $criteria->addSelectColumn(GsRelatieOngewensteGroepensnkPeer::ONGEWENSTE_GROEPEN_THESAURUS_122);
            $criteria->addSelectColumn(GsRelatieOngewensteGroepensnkPeer::ONGEWENSTE_GROEPSNUMMER);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.stamnaamcode');
            $criteria->addSelectColumn($alias . '.ongewenste_groepen_thesaurus_122');
            $criteria->addSelectColumn($alias . '.ongewenste_groepsnummer');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsRelatieOngewensteGroepensnkPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsRelatieOngewensteGroepensnkPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsRelatieOngewensteGroepensnkPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsRelatieOngewensteGroepensnkPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return GsRelatieOngewensteGroepensnk
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsRelatieOngewensteGroepensnkPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return GsRelatieOngewensteGroepensnkPeer::populateObjects(GsRelatieOngewensteGroepensnkPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsRelatieOngewensteGroepensnkPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsRelatieOngewensteGroepensnkPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsRelatieOngewensteGroepensnkPeer::DATABASE_NAME);

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
     * @param GsRelatieOngewensteGroepensnk $obj A GsRelatieOngewensteGroepensnk object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getStamnaamcode(), (string) $obj->getOngewensteGroepsnummer()));
            } // if key === null
            GsRelatieOngewensteGroepensnkPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsRelatieOngewensteGroepensnk object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsRelatieOngewensteGroepensnk) {
                $key = serialize(array((string) $value->getStamnaamcode(), (string) $value->getOngewensteGroepsnummer()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsRelatieOngewensteGroepensnk object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsRelatieOngewensteGroepensnkPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsRelatieOngewensteGroepensnk Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsRelatieOngewensteGroepensnkPeer::$instances[$key])) {
                return GsRelatieOngewensteGroepensnkPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (GsRelatieOngewensteGroepensnkPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsRelatieOngewensteGroepensnkPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_relatie_ongewenste_groepensnk
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
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol + 2] === null && $row[$startcol + 4] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 2], (string) $row[$startcol + 4]));
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return array((int) $row[$startcol + 2], (int) $row[$startcol + 4]);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = GsRelatieOngewensteGroepensnkPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsRelatieOngewensteGroepensnkPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsRelatieOngewensteGroepensnkPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsRelatieOngewensteGroepensnkPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (GsRelatieOngewensteGroepensnk object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsRelatieOngewensteGroepensnkPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsRelatieOngewensteGroepensnkPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsRelatieOngewensteGroepensnkPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsRelatieOngewensteGroepensnkPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsRelatieOngewensteGroepensnkPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related OngewensteGroepenOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinOngewensteGroepenOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsRelatieOngewensteGroepensnkPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsRelatieOngewensteGroepensnkPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsRelatieOngewensteGroepensnkPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsRelatieOngewensteGroepensnkPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsRelatieOngewensteGroepensnkPeer::ONGEWENSTE_GROEPEN_THESAURUS_122, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsRelatieOngewensteGroepensnkPeer::ONGEWENSTE_GROEPSNUMMER, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of GsRelatieOngewensteGroepensnk objects pre-filled with their GsThesauriTotaal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsRelatieOngewensteGroepensnk objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinOngewensteGroepenOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsRelatieOngewensteGroepensnkPeer::DATABASE_NAME);
        }

        GsRelatieOngewensteGroepensnkPeer::addSelectColumns($criteria);
        $startcol = GsRelatieOngewensteGroepensnkPeer::NUM_HYDRATE_COLUMNS;
        GsThesauriTotaalPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(GsRelatieOngewensteGroepensnkPeer::ONGEWENSTE_GROEPEN_THESAURUS_122, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsRelatieOngewensteGroepensnkPeer::ONGEWENSTE_GROEPSNUMMER, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsRelatieOngewensteGroepensnkPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsRelatieOngewensteGroepensnkPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsRelatieOngewensteGroepensnkPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsRelatieOngewensteGroepensnkPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsThesauriTotaalPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsThesauriTotaalPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GsRelatieOngewensteGroepensnk) to $obj2 (GsThesauriTotaal)
                $obj2->addGsRelatieOngewensteGroepensnk($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsRelatieOngewensteGroepensnkPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsRelatieOngewensteGroepensnkPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsRelatieOngewensteGroepensnkPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsRelatieOngewensteGroepensnkPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsRelatieOngewensteGroepensnkPeer::ONGEWENSTE_GROEPEN_THESAURUS_122, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsRelatieOngewensteGroepensnkPeer::ONGEWENSTE_GROEPSNUMMER, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }

    /**
     * Selects a collection of GsRelatieOngewensteGroepensnk objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsRelatieOngewensteGroepensnk objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsRelatieOngewensteGroepensnkPeer::DATABASE_NAME);
        }

        GsRelatieOngewensteGroepensnkPeer::addSelectColumns($criteria);
        $startcol2 = GsRelatieOngewensteGroepensnkPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addMultipleJoin(array(
        array(GsRelatieOngewensteGroepensnkPeer::ONGEWENSTE_GROEPEN_THESAURUS_122, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsRelatieOngewensteGroepensnkPeer::ONGEWENSTE_GROEPSNUMMER, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsRelatieOngewensteGroepensnkPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsRelatieOngewensteGroepensnkPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsRelatieOngewensteGroepensnkPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsRelatieOngewensteGroepensnkPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined GsThesauriTotaal rows

            $key2 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = GsThesauriTotaalPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsThesauriTotaalPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (GsRelatieOngewensteGroepensnk) to the collection in $obj2 (GsThesauriTotaal)
                $obj2->addGsRelatieOngewensteGroepensnk($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(GsRelatieOngewensteGroepensnkPeer::DATABASE_NAME)->getTable(GsRelatieOngewensteGroepensnkPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsRelatieOngewensteGroepensnkPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsRelatieOngewensteGroepensnkPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsRelatieOngewensteGroepensnkTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return GsRelatieOngewensteGroepensnkPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsRelatieOngewensteGroepensnk or Criteria object.
     *
     * @param      mixed $values Criteria or GsRelatieOngewensteGroepensnk object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsRelatieOngewensteGroepensnkPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsRelatieOngewensteGroepensnk object
        }


        // Set the correct dbName
        $criteria->setDbName(GsRelatieOngewensteGroepensnkPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a GsRelatieOngewensteGroepensnk or Criteria object.
     *
     * @param      mixed $values Criteria or GsRelatieOngewensteGroepensnk object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsRelatieOngewensteGroepensnkPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsRelatieOngewensteGroepensnkPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsRelatieOngewensteGroepensnkPeer::STAMNAAMCODE);
            $value = $criteria->remove(GsRelatieOngewensteGroepensnkPeer::STAMNAAMCODE);
            if ($value) {
                $selectCriteria->add(GsRelatieOngewensteGroepensnkPeer::STAMNAAMCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsRelatieOngewensteGroepensnkPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsRelatieOngewensteGroepensnkPeer::ONGEWENSTE_GROEPSNUMMER);
            $value = $criteria->remove(GsRelatieOngewensteGroepensnkPeer::ONGEWENSTE_GROEPSNUMMER);
            if ($value) {
                $selectCriteria->add(GsRelatieOngewensteGroepensnkPeer::ONGEWENSTE_GROEPSNUMMER, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsRelatieOngewensteGroepensnkPeer::TABLE_NAME);
            }

        } else { // $values is GsRelatieOngewensteGroepensnk object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsRelatieOngewensteGroepensnkPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_relatie_ongewenste_groepensnk table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsRelatieOngewensteGroepensnkPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsRelatieOngewensteGroepensnkPeer::TABLE_NAME, $con, GsRelatieOngewensteGroepensnkPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsRelatieOngewensteGroepensnkPeer::clearInstancePool();
            GsRelatieOngewensteGroepensnkPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsRelatieOngewensteGroepensnk or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsRelatieOngewensteGroepensnk object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(GsRelatieOngewensteGroepensnkPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsRelatieOngewensteGroepensnkPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsRelatieOngewensteGroepensnk) { // it's a model object
            // invalidate the cache for this single object
            GsRelatieOngewensteGroepensnkPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsRelatieOngewensteGroepensnkPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(GsRelatieOngewensteGroepensnkPeer::STAMNAAMCODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(GsRelatieOngewensteGroepensnkPeer::ONGEWENSTE_GROEPSNUMMER, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                GsRelatieOngewensteGroepensnkPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsRelatieOngewensteGroepensnkPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsRelatieOngewensteGroepensnkPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsRelatieOngewensteGroepensnk object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsRelatieOngewensteGroepensnk $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsRelatieOngewensteGroepensnkPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsRelatieOngewensteGroepensnkPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(GsRelatieOngewensteGroepensnkPeer::DATABASE_NAME, GsRelatieOngewensteGroepensnkPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $stamnaamcode
     * @param   int $ongewenste_groepsnummer
     * @param      PropelPDO $con
     * @return GsRelatieOngewensteGroepensnk
     */
    public static function retrieveByPK($stamnaamcode, $ongewenste_groepsnummer, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $stamnaamcode, (string) $ongewenste_groepsnummer));
         if (null !== ($obj = GsRelatieOngewensteGroepensnkPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsRelatieOngewensteGroepensnkPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(GsRelatieOngewensteGroepensnkPeer::DATABASE_NAME);
        $criteria->add(GsRelatieOngewensteGroepensnkPeer::STAMNAAMCODE, $stamnaamcode);
        $criteria->add(GsRelatieOngewensteGroepensnkPeer::ONGEWENSTE_GROEPSNUMMER, $ongewenste_groepsnummer);
        $v = GsRelatieOngewensteGroepensnkPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseGsRelatieOngewensteGroepensnkPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsRelatieOngewensteGroepensnkPeer::buildTableMap();

