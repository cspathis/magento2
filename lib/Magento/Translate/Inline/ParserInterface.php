<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @copyright   Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace Magento\Translate\Inline;

interface ParserInterface
{
    /**
     * Default state for jason flag
     */
    const JSON_FLAG_DEFAULT_STATE = false;

    /**
     * Parse and save edited translation
     *
     * @param array $translateParams
     * @return $this
     */
    public function processAjaxPost(array $translateParams);

    /**
     * Replace html body with translation wrapping.
     *
     * @param string $body
     * @return string
     */
    public function processResponseBodyString($body);

    /**
     * Returns the body content that is being parsed.
     *
     * @return string
     */
    public function getContent();

    /**
     * Sets the body content that is being parsed passed upon the passed in string.
     *
     * @param $content string
     */
    public function setContent($content);

    /**
     * Set flag about parsed content is Json
     *
     * @param bool $flag
     * @return $this
     */
    public function setIsJson($flag);
}
