<?php

class Admission extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     */
    public $admission_id;

    /**
     *
     * @var string
     */
    public $person_id;

    /**
     *
     * @var string
     */
    public $rm_id;

    /**
     *
     * @var string
     */
    public $full_name;

    /**
     *
     * @var string
     */
    public $jns_kelamin;

    /**
     *
     * @var string
     */
    public $tempat_lahir;

    /**
     *
     * @var string
     */
    public $tgl_lahir;

    /**
     *
     * @var string
     */
    public $nik;

    /**
     *
     * @var string
     */
    public $alamat;

    /**
     *
     * @var string
     */
    public $no_hp;

    /**
     *
     * @var string
     */
    public $jns_pembayaran_id;

    /**
     *
     * @var string
     */
    public $jns_pembayaran_name;

    /**
     *
     * @var string
     */
    public $keluhan_utama;

    /**
     *
     * @var string
     */
    public $poli_id;

    /**
     *
     * @var string
     */
    public $poli_name;

    /**
     *
     * @var string
     */
    public $dokter_id;

    /**
     *
     * @var string
     */
    public $dokter_name;

    /**
     *
     * @var string
     */
    public $scheduled_date;

    /**
     *
     * @var string
     */
    public $discharge_date;

    /**
     *
     * @var string
     */
    public $disposition;

    /**
     *
     * @var string
     */
    public $tags;

    /**
     *
     * @var string
     */
    public $created_date;

    /**
     *
     * @var string
     */
    public $created_by;

    /**
     *
     * @var string
     */
    public $created_by_name;

    /**
     *
     * @var string
     */
    public $modified_date;

    /**
     *
     * @var string
     */
    public $modified_by;

    /**
     *
     * @var string
     */
    public $modified_by_name;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("zicare_klinik");
        $this->setSource("admission");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'admission';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Admission[]|Admission|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Admission|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
