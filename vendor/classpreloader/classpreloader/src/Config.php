<?php

/*
 * This file is part of Class Preloader.
 *
 * (c) Graham Campbell <graham@cachethq.io>
 * (c) Michael Dowling <mtdowling@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ClassPreloader;

use ClassPreloader\Parser\AbstractNodeVisitor;
use IteratorAggregate;

/**
 * This is the config class.
 *
 * This contains all the class preloader configuration.
 */
class Config implements IteratorAggregate
{
    /**
     * The array of AbstractNodeVisitor objects that visit nodes.
     *
     * @var array
     */
    protected $visitors = array();

    /**
     * The array of file names.
     *
     * @var array
     */
    protected $filenames = array();

    /**
     * The array of exclusive filters.
     *
     * @var array
     */
    protected $exclusiveFilters = array();

    /**
     * The array of inclusive filters.
     *
     * @var array
     */
    protected $inclusiveFilters = array();

    /**
     * Add the filename owned by the config.
     *
     * @param string $filename
     *
     * @return \ClassPreloader\Config
     */
    public function addFile($filename)
    {
        $this->filenames[] = $filename;

        return $this;
    }

    /**
     * Get an iterator for the filenames.
     *
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->getFilenames());
    }

    /**
     * Get an array of file names that satisfy any added filters.
     *
     * @return array
     */
    public function getFilenames()
    {
        $filenames = array();
        foreach ($this->filenames as $f) {
            foreach ($this->inclusiveFilters as $filter) {
                if (!preg_match($filter, $f)) {
                    continue 2;
                }
            }
            foreach ($this->exclusiveFilters as $filter) {
                if (preg_match($filter, $f)) {
                    continue 2;
                }
            }
            $filenames[] = $f;
        }

        return $filenames;
    }

    /**
     * Add a filter used to filter out file names matching the pattern.
     *
     * We're filtering the classes using a regular expression.
     *
     * @param string $pattern
     *
     * @return \ClassPreloader\Config
     */
    public function addExclusiveFilter($pattern)
    {
        $this->exclusiveFilters[] = $pattern;

        return $this;
    }

    /**
     * Add a filter used to grab only file names matching the pattern.
     *
     * We're filtering the classes using a regular expression.
     *
     * @param string $pattern Regular expression pattern
     *
     * @return \ClassPreloader\Config
     */
    public function addInclusiveFilter($pattern)
    {
        $this->inclusiveFilters[] = $pattern;

        return $this;
    }

    /**
     * Add a visitor.
     *
     * It will visit each node when traversing the node list of each file.
     *
     * @param \ClassPreloader\Parser\AbstractNodeVisitor $visitor
     *
     * @return \ClassPreloader\Config
     */
    public function addVisitor(AbstractNodeVisitor $visitor)
    {
        $this->visitors[] = $visitor;

        return $this;
    }

    /**
     * Get an array of node visitors.
     *
     * @return array
     */
    public function getVisitors()
    {
        return $this->visitors;
    }
}
