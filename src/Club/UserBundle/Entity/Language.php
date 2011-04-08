<?php

namespace Club\UserBundle\Entity;

/**
 * Club\UserBundle\Entity\Language
 */
class Language
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var string $code
     */
    private $code;

    /**
     * @var string $locale
     */
    private $locale;

    /**
     * @var string $charset
     */
    private $charset;

    /**
     * @var string $date_format_short
     */
    private $date_format_short;

    /**
     * @var string $date_format_long
     */
    private $date_format_long;

    /**
     * @var string $time_format
     */
    private $time_format;

    /**
     * @var string $text_direction
     */
    private $text_direction;

    /**
     * @var string $numeric_separator_decimal
     */
    private $numeric_separator_decimal;

    /**
     * @var string $numeric_separator_thousands
     */
    private $numeric_separator_thousands;

    /**
     * @var Club\UserBundle\Entity\Currency
     */
    private $currency;


    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set code
     *
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * Get code
     *
     * @return string $code
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set locale
     *
     * @param string $locale
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
    }

    /**
     * Get locale
     *
     * @return string $locale
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Set charset
     *
     * @param string $charset
     */
    public function setCharset($charset)
    {
        $this->charset = $charset;
    }

    /**
     * Get charset
     *
     * @return string $charset
     */
    public function getCharset()
    {
        return $this->charset;
    }

    /**
     * Set date_format_short
     *
     * @param string $dateFormatShort
     */
    public function setDateFormatShort($dateFormatShort)
    {
        $this->date_format_short = $dateFormatShort;
    }

    /**
     * Get date_format_short
     *
     * @return string $dateFormatShort
     */
    public function getDateFormatShort()
    {
        return $this->date_format_short;
    }

    /**
     * Set date_format_long
     *
     * @param string $dateFormatLong
     */
    public function setDateFormatLong($dateFormatLong)
    {
        $this->date_format_long = $dateFormatLong;
    }

    /**
     * Get date_format_long
     *
     * @return string $dateFormatLong
     */
    public function getDateFormatLong()
    {
        return $this->date_format_long;
    }

    /**
     * Set time_format
     *
     * @param string $timeFormat
     */
    public function setTimeFormat($timeFormat)
    {
        $this->time_format = $timeFormat;
    }

    /**
     * Get time_format
     *
     * @return string $timeFormat
     */
    public function getTimeFormat()
    {
        return $this->time_format;
    }

    /**
     * Set text_direction
     *
     * @param string $textDirection
     */
    public function setTextDirection($textDirection)
    {
        $this->text_direction = $textDirection;
    }

    /**
     * Get text_direction
     *
     * @return string $textDirection
     */
    public function getTextDirection()
    {
        return $this->text_direction;
    }

    /**
     * Set numeric_separator_decimal
     *
     * @param string $numericSeparatorDecimal
     */
    public function setNumericSeparatorDecimal($numericSeparatorDecimal)
    {
        $this->numeric_separator_decimal = $numericSeparatorDecimal;
    }

    /**
     * Get numeric_separator_decimal
     *
     * @return string $numericSeparatorDecimal
     */
    public function getNumericSeparatorDecimal()
    {
        return $this->numeric_separator_decimal;
    }

    /**
     * Set numeric_separator_thousands
     *
     * @param string $numericSeparatorThousands
     */
    public function setNumericSeparatorThousands($numericSeparatorThousands)
    {
        $this->numeric_separator_thousands = $numericSeparatorThousands;
    }

    /**
     * Get numeric_separator_thousands
     *
     * @return string $numericSeparatorThousands
     */
    public function getNumericSeparatorThousands()
    {
        return $this->numeric_separator_thousands;
    }

    /**
     * Set currency
     *
     * @param Club\UserBundle\Entity\Currency $currency
     */
    public function setCurrency(\Club\UserBundle\Entity\Currency $currency)
    {
        $this->currency = $currency;
    }

    /**
     * Get currency
     *
     * @return Club\UserBundle\Entity\Currency $currency
     */
    public function getCurrency()
    {
        return $this->currency;
    }
}