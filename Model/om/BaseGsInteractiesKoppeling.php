<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BaseObject;
use \BasePeer;
use \Criteria;
use \Exception;
use \PDO;
use \Persistent;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsInteractiesKoppeling;
use PharmaIntelligence\GstandaardBundle\Model\GsInteractiesKoppelingPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsInteractiesKoppelingQuery;

abstract class BaseGsInteractiesKoppeling extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsInteractiesKoppelingPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsInteractiesKoppelingPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the bestandnummer field.
     * @var        int
     */
    protected $bestandnummer;

    /**
     * The value for the mutatiekode field.
     * @var        int
     */
    protected $mutatiekode;

    /**
     * The value for the gpk_code_interactiewaarschuwing_a field.
     * @var        int
     */
    protected $gpk_code_interactiewaarschuwing_a;

    /**
     * The value for the gpk_code_interactiewaarschuwing_b field.
     * @var        int
     */
    protected $gpk_code_interactiewaarschuwing_b;

    /**
     * The value for the interactiewaarschuwing_code field.
     * @var        int
     */
    protected $interactiewaarschuwing_code;

    /**
     * The value for the relevante_periode_na_staken_van_a_in_dagen field.
     * @var        int
     */
    protected $relevante_periode_na_staken_van_a_in_dagen;

    /**
     * The value for the relevante_periode_na_staken_van_b_in_dagen field.
     * @var        int
     */
    protected $relevante_periode_na_staken_van_b_in_dagen;

    /**
     * The value for the relevant_indien_a_wordt_toegevoegd_aan_b field.
     * @var        int
     */
    protected $relevant_indien_a_wordt_toegevoegd_aan_b;

    /**
     * The value for the relevant_indien_b_wordt_toegevoegd_aan_a field.
     * @var        int
     */
    protected $relevant_indien_b_wordt_toegevoegd_aan_a;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * Get the [bestandnummer] column value.
     *
     * @return int
     */
    public function getBestandnummer()
    {

        return $this->bestandnummer;
    }

    /**
     * Get the [mutatiekode] column value.
     *
     * @return int
     */
    public function getMutatiekode()
    {

        return $this->mutatiekode;
    }

    /**
     * Get the [gpk_code_interactiewaarschuwing_a] column value.
     *
     * @return int
     */
    public function getGpkCodeInteractiewaarschuwingA()
    {

        return $this->gpk_code_interactiewaarschuwing_a;
    }

    /**
     * Get the [gpk_code_interactiewaarschuwing_b] column value.
     *
     * @return int
     */
    public function getGpkCodeInteractiewaarschuwingB()
    {

        return $this->gpk_code_interactiewaarschuwing_b;
    }

    /**
     * Get the [interactiewaarschuwing_code] column value.
     *
     * @return int
     */
    public function getInteractiewaarschuwingCode()
    {

        return $this->interactiewaarschuwing_code;
    }

    /**
     * Get the [relevante_periode_na_staken_van_a_in_dagen] column value.
     *
     * @return int
     */
    public function getRelevantePeriodeNaStakenVanAInDagen()
    {

        return $this->relevante_periode_na_staken_van_a_in_dagen;
    }

    /**
     * Get the [relevante_periode_na_staken_van_b_in_dagen] column value.
     *
     * @return int
     */
    public function getRelevantePeriodeNaStakenVanBInDagen()
    {

        return $this->relevante_periode_na_staken_van_b_in_dagen;
    }

    /**
     * Get the [relevant_indien_a_wordt_toegevoegd_aan_b] column value.
     *
     * @return int
     */
    public function getRelevantIndienAWordtToegevoegdAanB()
    {

        return $this->relevant_indien_a_wordt_toegevoegd_aan_b;
    }

    /**
     * Get the [relevant_indien_b_wordt_toegevoegd_aan_a] column value.
     *
     * @return int
     */
    public function getRelevantIndienBWordtToegevoegdAanA()
    {

        return $this->relevant_indien_b_wordt_toegevoegd_aan_a;
    }

    /**
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsInteractiesKoppeling The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsInteractiesKoppelingPeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsInteractiesKoppeling The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsInteractiesKoppelingPeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [gpk_code_interactiewaarschuwing_a] column.
     *
     * @param  int $v new value
     * @return GsInteractiesKoppeling The current object (for fluent API support)
     */
    public function setGpkCodeInteractiewaarschuwingA($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gpk_code_interactiewaarschuwing_a !== $v) {
            $this->gpk_code_interactiewaarschuwing_a = $v;
            $this->modifiedColumns[] = GsInteractiesKoppelingPeer::GPK_CODE_INTERACTIEWAARSCHUWING_A;
        }


        return $this;
    } // setGpkCodeInteractiewaarschuwingA()

    /**
     * Set the value of [gpk_code_interactiewaarschuwing_b] column.
     *
     * @param  int $v new value
     * @return GsInteractiesKoppeling The current object (for fluent API support)
     */
    public function setGpkCodeInteractiewaarschuwingB($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gpk_code_interactiewaarschuwing_b !== $v) {
            $this->gpk_code_interactiewaarschuwing_b = $v;
            $this->modifiedColumns[] = GsInteractiesKoppelingPeer::GPK_CODE_INTERACTIEWAARSCHUWING_B;
        }


        return $this;
    } // setGpkCodeInteractiewaarschuwingB()

    /**
     * Set the value of [interactiewaarschuwing_code] column.
     *
     * @param  int $v new value
     * @return GsInteractiesKoppeling The current object (for fluent API support)
     */
    public function setInteractiewaarschuwingCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->interactiewaarschuwing_code !== $v) {
            $this->interactiewaarschuwing_code = $v;
            $this->modifiedColumns[] = GsInteractiesKoppelingPeer::INTERACTIEWAARSCHUWING_CODE;
        }


        return $this;
    } // setInteractiewaarschuwingCode()

    /**
     * Set the value of [relevante_periode_na_staken_van_a_in_dagen] column.
     *
     * @param  int $v new value
     * @return GsInteractiesKoppeling The current object (for fluent API support)
     */
    public function setRelevantePeriodeNaStakenVanAInDagen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->relevante_periode_na_staken_van_a_in_dagen !== $v) {
            $this->relevante_periode_na_staken_van_a_in_dagen = $v;
            $this->modifiedColumns[] = GsInteractiesKoppelingPeer::RELEVANTE_PERIODE_NA_STAKEN_VAN_A_IN_DAGEN;
        }


        return $this;
    } // setRelevantePeriodeNaStakenVanAInDagen()

    /**
     * Set the value of [relevante_periode_na_staken_van_b_in_dagen] column.
     *
     * @param  int $v new value
     * @return GsInteractiesKoppeling The current object (for fluent API support)
     */
    public function setRelevantePeriodeNaStakenVanBInDagen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->relevante_periode_na_staken_van_b_in_dagen !== $v) {
            $this->relevante_periode_na_staken_van_b_in_dagen = $v;
            $this->modifiedColumns[] = GsInteractiesKoppelingPeer::RELEVANTE_PERIODE_NA_STAKEN_VAN_B_IN_DAGEN;
        }


        return $this;
    } // setRelevantePeriodeNaStakenVanBInDagen()

    /**
     * Set the value of [relevant_indien_a_wordt_toegevoegd_aan_b] column.
     *
     * @param  int $v new value
     * @return GsInteractiesKoppeling The current object (for fluent API support)
     */
    public function setRelevantIndienAWordtToegevoegdAanB($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->relevant_indien_a_wordt_toegevoegd_aan_b !== $v) {
            $this->relevant_indien_a_wordt_toegevoegd_aan_b = $v;
            $this->modifiedColumns[] = GsInteractiesKoppelingPeer::RELEVANT_INDIEN_A_WORDT_TOEGEVOEGD_AAN_B;
        }


        return $this;
    } // setRelevantIndienAWordtToegevoegdAanB()

    /**
     * Set the value of [relevant_indien_b_wordt_toegevoegd_aan_a] column.
     *
     * @param  int $v new value
     * @return GsInteractiesKoppeling The current object (for fluent API support)
     */
    public function setRelevantIndienBWordtToegevoegdAanA($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->relevant_indien_b_wordt_toegevoegd_aan_a !== $v) {
            $this->relevant_indien_b_wordt_toegevoegd_aan_a = $v;
            $this->modifiedColumns[] = GsInteractiesKoppelingPeer::RELEVANT_INDIEN_B_WORDT_TOEGEVOEGD_AAN_A;
        }


        return $this;
    } // setRelevantIndienBWordtToegevoegdAanA()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->bestandnummer = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->mutatiekode = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->gpk_code_interactiewaarschuwing_a = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->gpk_code_interactiewaarschuwing_b = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->interactiewaarschuwing_code = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->relevante_periode_na_staken_van_a_in_dagen = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->relevante_periode_na_staken_van_b_in_dagen = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->relevant_indien_a_wordt_toegevoegd_aan_b = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->relevant_indien_b_wordt_toegevoegd_aan_a = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 9; // 9 = GsInteractiesKoppelingPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsInteractiesKoppeling object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(GsInteractiesKoppelingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsInteractiesKoppelingPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(GsInteractiesKoppelingPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsInteractiesKoppelingQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(GsInteractiesKoppelingPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                GsInteractiesKoppelingPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;


         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(GsInteractiesKoppelingPeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsInteractiesKoppelingPeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsInteractiesKoppelingPeer::GPK_CODE_INTERACTIEWAARSCHUWING_A)) {
            $modifiedColumns[':p' . $index++]  = '`gpk_code_interactiewaarschuwing_a`';
        }
        if ($this->isColumnModified(GsInteractiesKoppelingPeer::GPK_CODE_INTERACTIEWAARSCHUWING_B)) {
            $modifiedColumns[':p' . $index++]  = '`gpk_code_interactiewaarschuwing_b`';
        }
        if ($this->isColumnModified(GsInteractiesKoppelingPeer::INTERACTIEWAARSCHUWING_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`interactiewaarschuwing_code`';
        }
        if ($this->isColumnModified(GsInteractiesKoppelingPeer::RELEVANTE_PERIODE_NA_STAKEN_VAN_A_IN_DAGEN)) {
            $modifiedColumns[':p' . $index++]  = '`relevante_periode_na_staken_van_a_in_dagen`';
        }
        if ($this->isColumnModified(GsInteractiesKoppelingPeer::RELEVANTE_PERIODE_NA_STAKEN_VAN_B_IN_DAGEN)) {
            $modifiedColumns[':p' . $index++]  = '`relevante_periode_na_staken_van_b_in_dagen`';
        }
        if ($this->isColumnModified(GsInteractiesKoppelingPeer::RELEVANT_INDIEN_A_WORDT_TOEGEVOEGD_AAN_B)) {
            $modifiedColumns[':p' . $index++]  = '`relevant_indien_a_wordt_toegevoegd_aan_b`';
        }
        if ($this->isColumnModified(GsInteractiesKoppelingPeer::RELEVANT_INDIEN_B_WORDT_TOEGEVOEGD_AAN_A)) {
            $modifiedColumns[':p' . $index++]  = '`relevant_indien_b_wordt_toegevoegd_aan_a`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_interacties_koppeling` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`bestandnummer`':
                        $stmt->bindValue($identifier, $this->bestandnummer, PDO::PARAM_INT);
                        break;
                    case '`mutatiekode`':
                        $stmt->bindValue($identifier, $this->mutatiekode, PDO::PARAM_INT);
                        break;
                    case '`gpk_code_interactiewaarschuwing_a`':
                        $stmt->bindValue($identifier, $this->gpk_code_interactiewaarschuwing_a, PDO::PARAM_INT);
                        break;
                    case '`gpk_code_interactiewaarschuwing_b`':
                        $stmt->bindValue($identifier, $this->gpk_code_interactiewaarschuwing_b, PDO::PARAM_INT);
                        break;
                    case '`interactiewaarschuwing_code`':
                        $stmt->bindValue($identifier, $this->interactiewaarschuwing_code, PDO::PARAM_INT);
                        break;
                    case '`relevante_periode_na_staken_van_a_in_dagen`':
                        $stmt->bindValue($identifier, $this->relevante_periode_na_staken_van_a_in_dagen, PDO::PARAM_INT);
                        break;
                    case '`relevante_periode_na_staken_van_b_in_dagen`':
                        $stmt->bindValue($identifier, $this->relevante_periode_na_staken_van_b_in_dagen, PDO::PARAM_INT);
                        break;
                    case '`relevant_indien_a_wordt_toegevoegd_aan_b`':
                        $stmt->bindValue($identifier, $this->relevant_indien_a_wordt_toegevoegd_aan_b, PDO::PARAM_INT);
                        break;
                    case '`relevant_indien_b_wordt_toegevoegd_aan_a`':
                        $stmt->bindValue($identifier, $this->relevant_indien_b_wordt_toegevoegd_aan_a, PDO::PARAM_INT);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            if (($retval = GsInteractiesKoppelingPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }



            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = GsInteractiesKoppelingPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getBestandnummer();
                break;
            case 1:
                return $this->getMutatiekode();
                break;
            case 2:
                return $this->getGpkCodeInteractiewaarschuwingA();
                break;
            case 3:
                return $this->getGpkCodeInteractiewaarschuwingB();
                break;
            case 4:
                return $this->getInteractiewaarschuwingCode();
                break;
            case 5:
                return $this->getRelevantePeriodeNaStakenVanAInDagen();
                break;
            case 6:
                return $this->getRelevantePeriodeNaStakenVanBInDagen();
                break;
            case 7:
                return $this->getRelevantIndienAWordtToegevoegdAanB();
                break;
            case 8:
                return $this->getRelevantIndienBWordtToegevoegdAanA();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {
        if (isset($alreadyDumpedObjects['GsInteractiesKoppeling'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsInteractiesKoppeling'][serialize($this->getPrimaryKey())] = true;
        $keys = GsInteractiesKoppelingPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getGpkCodeInteractiewaarschuwingA(),
            $keys[3] => $this->getGpkCodeInteractiewaarschuwingB(),
            $keys[4] => $this->getInteractiewaarschuwingCode(),
            $keys[5] => $this->getRelevantePeriodeNaStakenVanAInDagen(),
            $keys[6] => $this->getRelevantePeriodeNaStakenVanBInDagen(),
            $keys[7] => $this->getRelevantIndienAWordtToegevoegdAanB(),
            $keys[8] => $this->getRelevantIndienBWordtToegevoegdAanA(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }


        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = GsInteractiesKoppelingPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setBestandnummer($value);
                break;
            case 1:
                $this->setMutatiekode($value);
                break;
            case 2:
                $this->setGpkCodeInteractiewaarschuwingA($value);
                break;
            case 3:
                $this->setGpkCodeInteractiewaarschuwingB($value);
                break;
            case 4:
                $this->setInteractiewaarschuwingCode($value);
                break;
            case 5:
                $this->setRelevantePeriodeNaStakenVanAInDagen($value);
                break;
            case 6:
                $this->setRelevantePeriodeNaStakenVanBInDagen($value);
                break;
            case 7:
                $this->setRelevantIndienAWordtToegevoegdAanB($value);
                break;
            case 8:
                $this->setRelevantIndienBWordtToegevoegdAanA($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = GsInteractiesKoppelingPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setGpkCodeInteractiewaarschuwingA($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setGpkCodeInteractiewaarschuwingB($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setInteractiewaarschuwingCode($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setRelevantePeriodeNaStakenVanAInDagen($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setRelevantePeriodeNaStakenVanBInDagen($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setRelevantIndienAWordtToegevoegdAanB($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setRelevantIndienBWordtToegevoegdAanA($arr[$keys[8]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsInteractiesKoppelingPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsInteractiesKoppelingPeer::BESTANDNUMMER)) $criteria->add(GsInteractiesKoppelingPeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsInteractiesKoppelingPeer::MUTATIEKODE)) $criteria->add(GsInteractiesKoppelingPeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsInteractiesKoppelingPeer::GPK_CODE_INTERACTIEWAARSCHUWING_A)) $criteria->add(GsInteractiesKoppelingPeer::GPK_CODE_INTERACTIEWAARSCHUWING_A, $this->gpk_code_interactiewaarschuwing_a);
        if ($this->isColumnModified(GsInteractiesKoppelingPeer::GPK_CODE_INTERACTIEWAARSCHUWING_B)) $criteria->add(GsInteractiesKoppelingPeer::GPK_CODE_INTERACTIEWAARSCHUWING_B, $this->gpk_code_interactiewaarschuwing_b);
        if ($this->isColumnModified(GsInteractiesKoppelingPeer::INTERACTIEWAARSCHUWING_CODE)) $criteria->add(GsInteractiesKoppelingPeer::INTERACTIEWAARSCHUWING_CODE, $this->interactiewaarschuwing_code);
        if ($this->isColumnModified(GsInteractiesKoppelingPeer::RELEVANTE_PERIODE_NA_STAKEN_VAN_A_IN_DAGEN)) $criteria->add(GsInteractiesKoppelingPeer::RELEVANTE_PERIODE_NA_STAKEN_VAN_A_IN_DAGEN, $this->relevante_periode_na_staken_van_a_in_dagen);
        if ($this->isColumnModified(GsInteractiesKoppelingPeer::RELEVANTE_PERIODE_NA_STAKEN_VAN_B_IN_DAGEN)) $criteria->add(GsInteractiesKoppelingPeer::RELEVANTE_PERIODE_NA_STAKEN_VAN_B_IN_DAGEN, $this->relevante_periode_na_staken_van_b_in_dagen);
        if ($this->isColumnModified(GsInteractiesKoppelingPeer::RELEVANT_INDIEN_A_WORDT_TOEGEVOEGD_AAN_B)) $criteria->add(GsInteractiesKoppelingPeer::RELEVANT_INDIEN_A_WORDT_TOEGEVOEGD_AAN_B, $this->relevant_indien_a_wordt_toegevoegd_aan_b);
        if ($this->isColumnModified(GsInteractiesKoppelingPeer::RELEVANT_INDIEN_B_WORDT_TOEGEVOEGD_AAN_A)) $criteria->add(GsInteractiesKoppelingPeer::RELEVANT_INDIEN_B_WORDT_TOEGEVOEGD_AAN_A, $this->relevant_indien_b_wordt_toegevoegd_aan_a);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(GsInteractiesKoppelingPeer::DATABASE_NAME);
        $criteria->add(GsInteractiesKoppelingPeer::GPK_CODE_INTERACTIEWAARSCHUWING_A, $this->gpk_code_interactiewaarschuwing_a);
        $criteria->add(GsInteractiesKoppelingPeer::GPK_CODE_INTERACTIEWAARSCHUWING_B, $this->gpk_code_interactiewaarschuwing_b);
        $criteria->add(GsInteractiesKoppelingPeer::INTERACTIEWAARSCHUWING_CODE, $this->interactiewaarschuwing_code);

        return $criteria;
    }

    /**
     * Returns the composite primary key for this object.
     * The array elements will be in same order as specified in XML.
     * @return array
     */
    public function getPrimaryKey()
    {
        $pks = array();
        $pks[0] = $this->getGpkCodeInteractiewaarschuwingA();
        $pks[1] = $this->getGpkCodeInteractiewaarschuwingB();
        $pks[2] = $this->getInteractiewaarschuwingCode();

        return $pks;
    }

    /**
     * Set the [composite] primary key.
     *
     * @param array $keys The elements of the composite key (order must match the order in XML file).
     * @return void
     */
    public function setPrimaryKey($keys)
    {
        $this->setGpkCodeInteractiewaarschuwingA($keys[0]);
        $this->setGpkCodeInteractiewaarschuwingB($keys[1]);
        $this->setInteractiewaarschuwingCode($keys[2]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getGpkCodeInteractiewaarschuwingA()) && (null === $this->getGpkCodeInteractiewaarschuwingB()) && (null === $this->getInteractiewaarschuwingCode());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsInteractiesKoppeling (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setGpkCodeInteractiewaarschuwingA($this->getGpkCodeInteractiewaarschuwingA());
        $copyObj->setGpkCodeInteractiewaarschuwingB($this->getGpkCodeInteractiewaarschuwingB());
        $copyObj->setInteractiewaarschuwingCode($this->getInteractiewaarschuwingCode());
        $copyObj->setRelevantePeriodeNaStakenVanAInDagen($this->getRelevantePeriodeNaStakenVanAInDagen());
        $copyObj->setRelevantePeriodeNaStakenVanBInDagen($this->getRelevantePeriodeNaStakenVanBInDagen());
        $copyObj->setRelevantIndienAWordtToegevoegdAanB($this->getRelevantIndienAWordtToegevoegdAanB());
        $copyObj->setRelevantIndienBWordtToegevoegdAanA($this->getRelevantIndienBWordtToegevoegdAanA());
        if ($makeNew) {
            $copyObj->setNew(true);
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return GsInteractiesKoppeling Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return GsInteractiesKoppelingPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsInteractiesKoppelingPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->bestandnummer = null;
        $this->mutatiekode = null;
        $this->gpk_code_interactiewaarschuwing_a = null;
        $this->gpk_code_interactiewaarschuwing_b = null;
        $this->interactiewaarschuwing_code = null;
        $this->relevante_periode_na_staken_van_a_in_dagen = null;
        $this->relevante_periode_na_staken_van_b_in_dagen = null;
        $this->relevant_indien_a_wordt_toegevoegd_aan_b = null;
        $this->relevant_indien_b_wordt_toegevoegd_aan_a = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(GsInteractiesKoppelingPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
