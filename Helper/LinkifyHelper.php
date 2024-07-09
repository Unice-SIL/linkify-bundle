<?php

/*
 * This file is part of the Symfony LinkifyBundle.
 *
 * (c) University of Cambridge
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Misd\LinkifyBundle\Helper;

use Misd\Linkify\Linkify;
use Symfony\Component\Templating\Helper\HelperInterface;

/**
 * LinkifyHelper.
 */
class LinkifyHelper implements HelperInterface
{
    /**
     * Linkify.
     *
     * @var Linkify
     */
    protected $linkify;

    /**
     * Charset.
     *
     * @var string
     */
    protected $charset = 'UTF-8';

    /**
     * Constructor.
     *
     * @param Linkify $linkify Linkify
     */
    public function __construct(Linkify $linkify)
    {
        $this->linkify = $linkify;
    }

    /**
     * {@inheritdoc}
     */
    public function setCharset(string $charset)
    {
        $this->charset = $charset;
    }

    /**
     * {@inheritdoc}
     */
    public function getCharset(): string
    {
        return $this->charset;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'linkify';
    }

    /**
     * Process text.
     *
     * @param string $text    Text to process.
     * @param array  $options Options.
     *
     * @return string Processed text.
     */
    public function process($text, array $options = array())
    {
        return $this->linkify->process($text, $options);
    }
}
