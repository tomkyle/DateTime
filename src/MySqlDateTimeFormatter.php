<?php
/**
 * This file is part of tomkyle/datetime.
 *
 * Copyright (c) 2014 Carsten Witt
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is furnished
 * to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
namespace tomkyle\DateTime;


/**
 * MySqlDateTimeFormatter
 */
class MySqlDateTimeFormatter
{

    /**
     * @var DateTime
     */
    public $datetime;


    /**
     * @param DateTime $datetime
     * @uses  $datetime
     */
    public function __construct( \DateTime $datetime = null)
    {
        $this->datetime = $datetime ?: new \DateTime('now');
    }


    /**
     * Returns the wrapped DateTime object as MySQL DateTime string: `Y-m-d H:i:s`
     * @return string `Y-m-d H:i:s`
     */
    public function __toString()
    {
        return $this->datetime->format('Y-m-d H:i:s');
    }
}
