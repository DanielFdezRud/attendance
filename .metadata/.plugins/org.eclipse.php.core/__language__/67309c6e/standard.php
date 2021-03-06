<?php

// Start of standard v.7.3.0

class __PHP_Incomplete_Class  {
}

/**
 * Children of this class are passed to
 * stream_filter_register.
 * @link http://www.php.net/manual/en/class.php_user_filter.php
 */
class php_user_filter  {
	public $filtername;
	public $params;


	/**
	 * Called when applying the filter
	 * @link http://www.php.net/manual/en/php-user-filter.filter.php
	 * @param resource $in in is a resource pointing to a bucket brigade
	 * which contains one or more bucket objects containing data to be filtered.
	 * @param resource $out out is a resource pointing to a second bucket brigade
	 * into which your modified buckets should be placed.
	 * @param int $consumed consumed, which must always
	 * be declared by reference, should be incremented by the length of the data
	 * which your filter reads in and alters. In most cases this means you will
	 * increment consumed by $bucket->datalen
	 * for each $bucket.
	 * @param bool $closing If the stream is in the process of closing
	 * (and therefore this is the last pass through the filterchain),
	 * the closing parameter will be set to true.
	 * @return int The filter method must return one of
	 * three values upon completion.
	 * <table>
	 * <tr valign="top">
	 * <td>Return Value</td>
	 * <td>Meaning</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>PSFS_PASS_ON</td>
	 * <td>
	 * Filter processed successfully with data available in the
	 * out bucket brigade.
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>PSFS_FEED_ME</td>
	 * <td>
	 * Filter processed successfully, however no data was available to
	 * return. More data is required from the stream or prior filter.
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>PSFS_ERR_FATAL (default)</td>
	 * <td>
	 * The filter experienced an unrecoverable error and cannot continue.
	 * </td>
	 * </tr>
	 * </table>
	 */
	public function filter ($in, $out, int &$consumed, bool $closing) {}

	/**
	 * Called when creating the filter
	 * @link http://www.php.net/manual/en/php-user-filter.oncreate.php
	 * @return bool Your implementation of
	 * this method should return false on failure, or true on success.
	 */
	public function onCreate () {}

	/**
	 * Called when closing the filter
	 * @link http://www.php.net/manual/en/php-user-filter.onclose.php
	 * @return void Return value is ignored.
	 */
	public function onClose () {}

}

/**
 * Instances of Directory are created by calling the
 * dir function, not by the new operator.
 * @link http://www.php.net/manual/en/class.directory.php
 */
class Directory  {

	/**
	 * The directory that was opened.
	 * @var string
	 * @link http://www.php.net/manual/en/class.directory.php#directory.props.path
	 */
	public $path;

	/**
	 * Can be used with other directory functions such as
	 * readdir, rewinddir and
	 * closedir.
	 * @var resource
	 * @link http://www.php.net/manual/en/class.directory.php#directory.props.handle
	 */
	public $handle;

	/**
	 * Close directory handle
	 * @link http://www.php.net/manual/en/directory.close.php
	 * @param resource $dir_handle [optional] 
	 * @return void 
	 */
	public function close ($dir_handle = null) {}

	/**
	 * Rewind directory handle
	 * @link http://www.php.net/manual/en/directory.rewind.php
	 * @param resource $dir_handle [optional] 
	 * @return void 
	 */
	public function rewind ($dir_handle = null) {}

	/**
	 * Read entry from directory handle
	 * @link http://www.php.net/manual/en/directory.read.php
	 * @param resource $dir_handle [optional] 
	 * @return string 
	 */
	public function read ($dir_handle = null) {}

}

/**
 * AssertionError is thrown when
 * an assertion made via assert fails.
 * @link http://www.php.net/manual/en/class.assertionerror.php
 */
class AssertionError extends Error implements Throwable {
	protected $message;
	protected $code;
	protected $file;
	protected $line;


	final private function __clone () {}

	/**
	 * @param mixed $message [optional]
	 * @param mixed $code [optional]
	 * @param mixed $previous [optional]
	 */
	public function __construct ($message = null, $code = null, $previous = null) {}

	public function __wakeup () {}

	final public function getMessage () {}

	final public function getCode () {}

	final public function getFile () {}

	final public function getLine () {}

	final public function getTrace () {}

	final public function getPrevious () {}

	final public function getTraceAsString () {}

	public function __toString () {}

}

/**
 * Returns the value of a constant
 * @link http://www.php.net/manual/en/function.constant.php
 * @param string $name The constant name.
 * @return mixed the value of the constant, or null if the constant is not
 * defined.
 */
function constant (string $name) {}

/**
 * Convert binary data into hexadecimal representation
 * @link http://www.php.net/manual/en/function.bin2hex.php
 * @param string $str A string.
 * @return string the hexadecimal representation of the given string.
 */
function bin2hex (string $str) {}

/**
 * Decodes a hexadecimally encoded binary string
 * @link http://www.php.net/manual/en/function.hex2bin.php
 * @param string $data Hexadecimal representation of data.
 * @return string the binary representation of the given data or false on failure.
 */
function hex2bin (string $data) {}

/**
 * Delay execution
 * @link http://www.php.net/manual/en/function.sleep.php
 * @param int $seconds Halt time in seconds.
 * @return int zero on success, or false on error.
 * <p>
 * If the call was interrupted by a signal, sleep returns
 * a non-zero value. On Windows, this value will always be
 * 192 (the value of the
 * WAIT_IO_COMPLETION constant within the Windows API).
 * On other platforms, the return value will be the number of seconds left to
 * sleep.
 * </p>
 */
function sleep (int $seconds) {}

/**
 * Delay execution in microseconds
 * @link http://www.php.net/manual/en/function.usleep.php
 * @param int $micro_seconds Halt time in microseconds. A microsecond is one millionth of a
 * second.
 * @return void 
 */
function usleep (int $micro_seconds) {}

/**
 * Delay for a number of seconds and nanoseconds
 * @link http://www.php.net/manual/en/function.time-nanosleep.php
 * @param int $seconds Must be a non-negative integer.
 * @param int $nanoseconds Must be a non-negative integer less than 1 billion.
 * @return mixed true on success or false on failure
 * <p>
 * If the delay was interrupted by a signal, an associative array will be
 * returned with the components:
 * <p>
 * <br>
 * seconds - number of seconds remaining in
 * the delay
 * <br>
 * nanoseconds - number of nanoseconds
 * remaining in the delay
 * </p>
 * </p>
 */
function time_nanosleep (int $seconds, int $nanoseconds) {}

/**
 * Make the script sleep until the specified time
 * @link http://www.php.net/manual/en/function.time-sleep-until.php
 * @param float $timestamp The timestamp when the script should wake.
 * @return bool true on success or false on failure
 */
function time_sleep_until (float $timestamp) {}

/**
 * Flush system output buffer
 * @link http://www.php.net/manual/en/function.flush.php
 * @return void 
 */
function flush () {}

/**
 * Wraps a string to a given number of characters
 * @link http://www.php.net/manual/en/function.wordwrap.php
 * @param string $str The input string.
 * @param int $width [optional] The number of characters at which the string will be wrapped.
 * @param string $break [optional] The line is broken using the optional
 * break parameter.
 * @param bool $cut [optional] If the cut is set to true, the string is
 * always wrapped at or before the specified width. So if you have
 * a word that is larger than the given width, it is broken apart.
 * (See second example). When false the function does not split the word
 * even if the width is smaller than the word width.
 * @return string the given string wrapped at the specified length.
 */
function wordwrap (string $str, int $width = null, string $break = null, bool $cut = null) {}

/**
 * Convert special characters to HTML entities
 * @link http://www.php.net/manual/en/function.htmlspecialchars.php
 * @param string $string The string being converted.
 * @param int $flags [optional] A bitmask of one or more of the following flags, which specify how to handle quotes,
 * invalid code unit sequences and the used document type. The default is
 * ENT_COMPAT | ENT_HTML401.
 * <table>
 * Available flags constants
 * <table>
 * <tr valign="top">
 * <td>Constant Name</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_COMPAT</td>
 * <td>Will convert double-quotes and leave single-quotes alone.</td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_QUOTES</td>
 * <td>Will convert both double and single quotes.</td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_NOQUOTES</td>
 * <td>Will leave both double and single quotes unconverted.</td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_IGNORE</td>
 * <td>
 * Silently discard invalid code unit sequences instead of returning
 * an empty string. Using this flag is discouraged as it
 * may have security implications.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_SUBSTITUTE</td>
 * <td>
 * Replace invalid code unit sequences with a Unicode Replacement Character
 * U+FFFD (UTF-8) or &amp;#xFFFD; (otherwise) instead of returning an empty string.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_DISALLOWED</td>
 * <td>
 * Replace invalid code points for the given document type with a
 * Unicode Replacement Character U+FFFD (UTF-8) or &amp;#xFFFD;
 * (otherwise) instead of leaving them as is. This may be useful, for
 * instance, to ensure the well-formedness of XML documents with
 * embedded external content.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_HTML401</td>
 * <td>
 * Handle code as HTML 4.01.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_XML1</td>
 * <td>
 * Handle code as XML 1.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_XHTML</td>
 * <td>
 * Handle code as XHTML.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_HTML5</td>
 * <td>
 * Handle code as HTML 5.
 * </td>
 * </tr>
 * </table>
 * </table>
 * @param string $encoding [optional] strings.parameter.encoding
 * <p>
 * For the purposes of this function, the encodings
 * ISO-8859-1, ISO-8859-15,
 * UTF-8, cp866,
 * cp1251, cp1252, and
 * KOI8-R are effectively equivalent, provided the
 * string itself is valid for the encoding, as
 * the characters affected by htmlspecialchars occupy
 * the same positions in all of these encodings.
 * </p>
 * reference.strings.charsets
 * @param bool $double_encode [optional] When double_encode is turned off PHP will not
 * encode existing html entities, the default is to convert everything.
 * @return string The converted string.
 * <p>
 * If the input string contains an invalid code unit
 * sequence within the given encoding an empty string
 * will be returned, unless either the ENT_IGNORE or
 * ENT_SUBSTITUTE flags are set.
 * </p>
 */
function htmlspecialchars (string $string, int $flags = null, string $encoding = null, bool $double_encode = null) {}

/**
 * Convert all applicable characters to HTML entities
 * @link http://www.php.net/manual/en/function.htmlentities.php
 * @param string $string The input string.
 * @param int $flags [optional] A bitmask of one or more of the following flags, which specify how to handle quotes,
 * invalid code unit sequences and the used document type. The default is
 * ENT_COMPAT | ENT_HTML401.
 * <table>
 * Available flags constants
 * <table>
 * <tr valign="top">
 * <td>Constant Name</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_COMPAT</td>
 * <td>Will convert double-quotes and leave single-quotes alone.</td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_QUOTES</td>
 * <td>Will convert both double and single quotes.</td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_NOQUOTES</td>
 * <td>Will leave both double and single quotes unconverted.</td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_IGNORE</td>
 * <td>
 * Silently discard invalid code unit sequences instead of returning
 * an empty string. Using this flag is discouraged as it
 * may have security implications.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_SUBSTITUTE</td>
 * <td>
 * Replace invalid code unit sequences with a Unicode Replacement Character
 * U+FFFD (UTF-8) or &amp;#FFFD; (otherwise) instead of returning an empty string.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_DISALLOWED</td>
 * <td>
 * Replace invalid code points for the given document type with a
 * Unicode Replacement Character U+FFFD (UTF-8) or &amp;#FFFD;
 * (otherwise) instead of leaving them as is. This may be useful, for
 * instance, to ensure the well-formedness of XML documents with
 * embedded external content.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_HTML401</td>
 * <td>
 * Handle code as HTML 4.01.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_XML1</td>
 * <td>
 * Handle code as XML 1.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_XHTML</td>
 * <td>
 * Handle code as XHTML.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_HTML5</td>
 * <td>
 * Handle code as HTML 5.
 * </td>
 * </tr>
 * </table>
 * </table>
 * @param string $encoding [optional] strings.parameter.encoding
 * reference.strings.charsets
 * @param bool $double_encode [optional] When double_encode is turned off PHP will not
 * encode existing html entities. The default is to convert everything.
 * @return string the encoded string.
 * <p>
 * If the input string contains an invalid code unit
 * sequence within the given encoding an empty string
 * will be returned, unless either the ENT_IGNORE or
 * ENT_SUBSTITUTE flags are set.
 * </p>
 */
function htmlentities (string $string, int $flags = null, string $encoding = null, bool $double_encode = null) {}

/**
 * Convert HTML entities to their corresponding characters
 * @link http://www.php.net/manual/en/function.html-entity-decode.php
 * @param string $string The input string.
 * @param int $flags [optional] A bitmask of one or more of the following flags, which specify how to handle quotes and
 * which document type to use. The default is ENT_COMPAT | ENT_HTML401.
 * <table>
 * Available flags constants
 * <table>
 * <tr valign="top">
 * <td>Constant Name</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_COMPAT</td>
 * <td>Will convert double-quotes and leave single-quotes alone.</td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_QUOTES</td>
 * <td>Will convert both double and single quotes.</td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_NOQUOTES</td>
 * <td>Will leave both double and single quotes unconverted.</td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_HTML401</td>
 * <td>
 * Handle code as HTML 4.01.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_XML1</td>
 * <td>
 * Handle code as XML 1.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_XHTML</td>
 * <td>
 * Handle code as XHTML.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_HTML5</td>
 * <td>
 * Handle code as HTML 5.
 * </td>
 * </tr>
 * </table>
 * </table>
 * @param string $encoding [optional] strings.parameter.encoding
 * reference.strings.charsets
 * @return string the decoded string.
 */
function html_entity_decode (string $string, int $flags = null, string $encoding = null) {}

/**
 * Convert special HTML entities back to characters
 * @link http://www.php.net/manual/en/function.htmlspecialchars-decode.php
 * @param string $string The string to decode.
 * @param int $flags [optional] A bitmask of one or more of the following flags, which specify how to handle quotes and
 * which document type to use. The default is ENT_COMPAT | ENT_HTML401.
 * <table>
 * Available flags constants
 * <table>
 * <tr valign="top">
 * <td>Constant Name</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_COMPAT</td>
 * <td>Will convert double-quotes and leave single-quotes alone.</td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_QUOTES</td>
 * <td>Will convert both double and single quotes.</td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_NOQUOTES</td>
 * <td>Will leave both double and single quotes unconverted.</td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_HTML401</td>
 * <td>
 * Handle code as HTML 4.01.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_XML1</td>
 * <td>
 * Handle code as XML 1.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_XHTML</td>
 * <td>
 * Handle code as XHTML.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_HTML5</td>
 * <td>
 * Handle code as HTML 5.
 * </td>
 * </tr>
 * </table>
 * </table>
 * @return string the decoded string.
 */
function htmlspecialchars_decode (string $string, int $flags = null) {}

/**
 * Returns the translation table used by htmlspecialchars and htmlentities
 * @link http://www.php.net/manual/en/function.get-html-translation-table.php
 * @param int $table [optional] Which table to return. Either HTML_ENTITIES or
 * HTML_SPECIALCHARS.
 * @param int $flags [optional] A bitmask of one or more of the following flags, which specify which quotes the
 * table will contain as well as which document type the table is for. The default is
 * ENT_COMPAT | ENT_HTML401.
 * <table>
 * Available flags constants
 * <table>
 * <tr valign="top">
 * <td>Constant Name</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_COMPAT</td>
 * <td>Table will contain entities for double-quotes, but not for single-quotes.</td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_QUOTES</td>
 * <td>Table will contain entities for both double and single quotes.</td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_NOQUOTES</td>
 * <td>Table will neither contain entities for single quotes nor for double quotes.</td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_HTML401</td>
 * <td>Table for HTML 4.01.</td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_XML1</td>
 * <td>Table for XML 1.</td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_XHTML</td>
 * <td>Table for XHTML.</td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_HTML5</td>
 * <td>Table for HTML 5.</td>
 * </tr>
 * </table>
 * </table>
 * @param string $encoding [optional] <p>
 * Encoding to use.
 * If omitted, the default value for this argument is ISO-8859-1 in
 * versions of PHP prior to 5.4.0, and UTF-8 from PHP 5.4.0 onwards.
 * </p>
 * reference.strings.charsets
 * @return array the translation table as an array, with the original characters
 * as keys and entities as values.
 */
function get_html_translation_table (int $table = null, int $flags = null, string $encoding = null) {}

/**
 * Calculate the sha1 hash of a string
 * @link http://www.php.net/manual/en/function.sha1.php
 * @param string $str The input string.
 * @param bool $raw_output [optional] If the optional raw_output is set to true,
 * then the sha1 digest is instead returned in raw binary format with a
 * length of 20, otherwise the returned value is a 40-character
 * hexadecimal number.
 * @return string the sha1 hash as a string.
 */
function sha1 (string $str, bool $raw_output = null) {}

/**
 * Calculate the sha1 hash of a file
 * @link http://www.php.net/manual/en/function.sha1-file.php
 * @param string $filename The filename of the file to hash.
 * @param bool $raw_output [optional] When true, returns the digest in raw binary format with a length of
 * 20.
 * @return string a string on success, false otherwise.
 */
function sha1_file (string $filename, bool $raw_output = null) {}

/**
 * Calculate the md5 hash of a string
 * @link http://www.php.net/manual/en/function.md5.php
 * @param string $str The string.
 * @param bool $raw_output [optional] If the optional raw_output is set to true,
 * then the md5 digest is instead returned in raw binary format with a
 * length of 16.
 * @return string the hash as a 32-character hexadecimal number.
 */
function md5 (string $str, bool $raw_output = null) {}

/**
 * Calculates the md5 hash of a given file
 * @link http://www.php.net/manual/en/function.md5-file.php
 * @param string $filename The filename
 * @param bool $raw_output [optional] When true, returns the digest in raw binary format with a length of
 * 16.
 * @return string a string on success, false otherwise.
 */
function md5_file (string $filename, bool $raw_output = null) {}

/**
 * Calculates the crc32 polynomial of a string
 * @link http://www.php.net/manual/en/function.crc32.php
 * @param string $str The data.
 * @return int the crc32 checksum of str as an integer.
 */
function crc32 (string $str) {}

/**
 * Parse a binary IPTC block into single tags
 * @link http://www.php.net/manual/en/function.iptcparse.php
 * @param string $iptcblock A binary IPTC block.
 * @return array an array using the tagmarker as an index and the value as the
 * value. It returns false on error or if no IPTC data was found.
 */
function iptcparse (string $iptcblock) {}

/**
 * Embeds binary IPTC data into a JPEG image
 * @link http://www.php.net/manual/en/function.iptcembed.php
 * @param string $iptcdata The data to be written.
 * @param string $jpeg_file_name Path to the JPEG image.
 * @param int $spool [optional] Spool flag. If the spool flag is less than 2 then the JPEG will be 
 * returned as a string. Otherwise the JPEG will be printed to STDOUT.
 * @return mixed If spool is less than 2, the JPEG will be returned,
 * or false on failure. Otherwise returns true on success
 * or false on failure.
 */
function iptcembed (string $iptcdata, string $jpeg_file_name, int $spool = null) {}

/**
 * Get the size of an image
 * @link http://www.php.net/manual/en/function.getimagesize.php
 * @param string $filename This parameter specifies the file you wish to retrieve information
 * about. It can reference a local file or (configuration permitting) a
 * remote file using one of the supported streams.
 * @param array $imageinfo [optional] <p>
 * This optional parameter allows you to extract some extended
 * information from the image file. Currently, this will return the
 * different JPG APP markers as an associative array.
 * Some programs use these APP markers to embed text information in 
 * images. A very common one is to embed 
 * IPTC information in the APP13 marker.
 * You can use the iptcparse function to parse the
 * binary APP13 marker into something readable.
 * </p>
 * <p>
 * The imageinfo only supports
 * JFIF files.
 * </p>
 * @return array an array with up to 7 elements. Not all image types will include
 * the channels and bits elements.
 * <p>
 * Index 0 and 1 contains respectively the width and the height of the image.
 * </p>
 * <p>
 * Some formats may contain no image or may contain multiple images. In these
 * cases, getimagesize might not be able to properly
 * determine the image size. getimagesize will return
 * zero for width and height in these cases.
 * </p>
 * <p>
 * Index 2 is one of the IMAGETYPE_XXX constants indicating 
 * the type of the image.
 * </p>
 * <p>
 * Index 3 is a text string with the correct 
 * height="yyy" width="xxx" string that can be used
 * directly in an IMG tag.
 * </p>
 * <p>
 * mime is the correspondant MIME type of the image.
 * This information can be used to deliver images with the correct HTTP 
 * Content-type header:
 * getimagesize and MIME types
 * <pre>
 * <code>&lt;?php
 * $size = getimagesize($filename);
 * $fp = fopen($filename, &quot;rb&quot;);
 * if ($size &amp;&amp; $fp) {
 * header(&quot;Content-type: {$size['mime']}&quot;);
 * fpassthru($fp);
 * exit;
 * } else {
 * &#47;&#47; error
 * }
 * ?&gt;</code>
 * </pre>
 * </p>
 * <p>
 * channels will be 3 for RGB pictures and 4 for CMYK
 * pictures.
 * </p>
 * <p>
 * bits is the number of bits for each color.
 * </p>
 * <p>
 * For some image types, the presence of channels and
 * bits values can be a bit
 * confusing. As an example, GIF always uses 3 channels
 * per pixel, but the number of bits per pixel cannot be calculated for an
 * animated GIF with a global color table.
 * </p>
 * <p>
 * On failure, false is returned.
 * </p>
 */
function getimagesize (string $filename, array &$imageinfo = null) {}

/**
 * Get the size of an image from a string
 * @link http://www.php.net/manual/en/function.getimagesizefromstring.php
 * @param string $imagedata The image data, as a string.
 * @param array $imageinfo [optional] See getimagesize.
 * @return array See getimagesize.
 */
function getimagesizefromstring (string $imagedata, array &$imageinfo = null) {}

/**
 * Get Mime-Type for image-type returned by getimagesize,
 * exif_read_data, exif_thumbnail, exif_imagetype
 * @link http://www.php.net/manual/en/function.image-type-to-mime-type.php
 * @param int $imagetype One of the IMAGETYPE_XXX constants.
 * @return string The returned values are as follows
 * <table>
 * Returned values Constants
 * <table>
 * <tr valign="top">
 * <td>imagetype</td>
 * <td>Returned value</td>
 * </tr>
 * <tr valign="top">
 * <td>IMAGETYPE_GIF</td>
 * <td>image/gif</td>
 * </tr>
 * <tr valign="top">
 * <td>IMAGETYPE_JPEG</td>
 * <td>image/jpeg</td>
 * </tr>
 * <tr valign="top">
 * <td>IMAGETYPE_PNG</td>
 * <td>image/png</td>
 * </tr>
 * <tr valign="top">
 * <td>IMAGETYPE_SWF</td>
 * <td>application/x-shockwave-flash</td>
 * </tr>
 * <tr valign="top">
 * <td>IMAGETYPE_PSD</td>
 * <td>image/psd</td>
 * </tr>
 * <tr valign="top">
 * <td>IMAGETYPE_BMP</td>
 * <td>image/bmp</td>
 * </tr>
 * <tr valign="top">
 * <td>IMAGETYPE_TIFF_II (intel byte order)</td>
 * <td>image/tiff</td>
 * </tr>
 * <tr valign="top">
 * <td>
 * IMAGETYPE_TIFF_MM (motorola byte order)
 * </td>
 * <td>image/tiff</td>
 * </tr>
 * <tr valign="top">
 * <td>IMAGETYPE_JPC</td>
 * <td>application/octet-stream</td>
 * </tr>
 * <tr valign="top">
 * <td>IMAGETYPE_JP2</td>
 * <td>image/jp2</td>
 * </tr>
 * <tr valign="top">
 * <td>IMAGETYPE_JPX</td>
 * <td>application/octet-stream</td>
 * </tr>
 * <tr valign="top">
 * <td>IMAGETYPE_JB2</td>
 * <td>application/octet-stream</td>
 * </tr>
 * <tr valign="top">
 * <td>IMAGETYPE_SWC</td>
 * <td>application/x-shockwave-flash</td>
 * </tr>
 * <tr valign="top">
 * <td>IMAGETYPE_IFF</td>
 * <td>image/iff</td>
 * </tr>
 * <tr valign="top">
 * <td>IMAGETYPE_WBMP</td>
 * <td>image/vnd.wap.wbmp</td>
 * </tr>
 * <tr valign="top">
 * <td>IMAGETYPE_XBM</td>
 * <td>image/xbm</td>
 * </tr>
 * <tr valign="top">
 * <td>IMAGETYPE_ICO</td>
 * <td>image/vnd.microsoft.icon</td>
 * </tr>
 * <tr valign="top">
 * <td>IMAGETYPE_WEBP</td>
 * <td>image/webp</td>
 * </tr>
 * </table>
 * </table>
 */
function image_type_to_mime_type (int $imagetype) {}

/**
 * Get file extension for image type
 * @link http://www.php.net/manual/en/function.image-type-to-extension.php
 * @param int $imagetype One of the IMAGETYPE_XXX constant.
 * @param bool $include_dot [optional] Whether to prepend a dot to the extension or not. Default to true.
 * @return string A string with the extension corresponding to the given image type.
 */
function image_type_to_extension (int $imagetype, bool $include_dot = null) {}

/**
 * Outputs information about PHP's configuration
 * @link http://www.php.net/manual/en/function.phpinfo.php
 * @param int $what [optional] <p>
 * The output may be customized by passing one or more of the
 * following constants bitwise values summed
 * together in the optional what parameter.
 * One can also combine the respective constants or bitwise values
 * together with the bitwise or operator.
 * </p>
 * <p>
 * <table>
 * phpinfo options
 * <table>
 * <tr valign="top">
 * <td>Name (constant)</td>
 * <td>Value</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>INFO_GENERAL</td>
 * <td>1</td>
 * <td>
 * The configuration line, php.ini location, build date, Web
 * Server, System and more.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>INFO_CREDITS</td>
 * <td>2</td>
 * <td>
 * PHP Credits. See also phpcredits.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>INFO_CONFIGURATION</td>
 * <td>4</td>
 * <td>
 * Current Local and Master values for PHP directives. See
 * also ini_get.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>INFO_MODULES</td>
 * <td>8</td>
 * <td>
 * Loaded modules and their respective settings. See also
 * get_loaded_extensions.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>INFO_ENVIRONMENT</td>
 * <td>16</td>
 * <td>
 * Environment Variable information that's also available in
 * $_ENV.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>INFO_VARIABLES</td>
 * <td>32</td>
 * <td>
 * Shows all 
 * predefined variables from EGPCS (Environment, GET,
 * POST, Cookie, Server).
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>INFO_LICENSE</td>
 * <td>64</td>
 * <td>
 * PHP License information. See also the license FAQ.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>INFO_ALL</td>
 * <td>-1</td>
 * <td>
 * Shows all of the above.
 * </td>
 * </tr>
 * </table>
 * </table>
 * </p>
 * @return bool true on success or false on failure
 */
function phpinfo (int $what = null) {}

/**
 * Gets the current PHP version
 * @link http://www.php.net/manual/en/function.phpversion.php
 * @param string $extension [optional] An optional extension name.
 * @return string If the optional extension parameter is
 * specified, phpversion returns the version of that
 * extension, or false if there is no version information associated or
 * the extension isn't enabled.
 */
function phpversion (string $extension = null) {}

/**
 * Prints out the credits for PHP
 * @link http://www.php.net/manual/en/function.phpcredits.php
 * @param int $flag [optional] <p>
 * To generate a custom credits page, you may want to use the
 * flag parameter.
 * </p>
 * <p>
 * <table>
 * Pre-defined phpcredits flags
 * <table>
 * <tr valign="top">
 * <td>name</td>
 * <td>description</td>
 * </tr>
 * <tr valign="top">
 * <td>CREDITS_ALL</td>
 * <td>
 * All the credits, equivalent to using: CREDITS_DOCS +
 * CREDITS_GENERAL + CREDITS_GROUP +
 * CREDITS_MODULES + CREDITS_FULLPAGE.
 * It generates a complete stand-alone HTML page with the appropriate tags.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>CREDITS_DOCS</td>
 * <td>The credits for the documentation team</td>
 * </tr>
 * <tr valign="top">
 * <td>CREDITS_FULLPAGE</td>
 * <td>
 * Usually used in combination with the other flags. Indicates
 * that a complete stand-alone HTML page needs to be
 * printed including the information indicated by the other
 * flags.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>CREDITS_GENERAL</td>
 * <td>
 * General credits: Language design and concept, PHP authors 
 * and SAPI module.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>CREDITS_GROUP</td>
 * <td>A list of the core developers</td>
 * </tr>
 * <tr valign="top">
 * <td>CREDITS_MODULES</td>
 * <td>
 * A list of the extension modules for PHP, and their authors
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>CREDITS_SAPI</td>
 * <td>
 * A list of the server API modules for PHP, and their authors
 * </td>
 * </tr>
 * </table>
 * </table>
 * </p>
 * @return bool true on success or false on failure
 */
function phpcredits (int $flag = null) {}

/**
 * Returns the type of interface between web server and PHP
 * @link http://www.php.net/manual/en/function.php-sapi-name.php
 * @return string the interface type, as a lowercase string.
 * <p>
 * Although not exhaustive, the possible return values include 
 * aolserver, apache, 
 * apache2filter, apache2handler, 
 * caudium, cgi (until PHP 5.3), 
 * cgi-fcgi, cli, cli-server,
 * continuity, embed, fpm-fcgi,
 * isapi, litespeed, 
 * milter, nsapi, 
 * phttpd, pi3web, roxen,
 * thttpd, tux, and webjames.
 * </p>
 */
function php_sapi_name () {}

/**
 * Returns information about the operating system PHP is running on
 * @link http://www.php.net/manual/en/function.php-uname.php
 * @param string $mode [optional] <p>
 * mode is a single character that defines what
 * information is returned:
 * <p>
 * <br>
 * 'a': This is the default. Contains all modes in
 * the sequence "s n r v m".
 * <br>
 * 's': Operating system name. eg.
 * FreeBSD.
 * <br>
 * 'n': Host name. eg. 
 * localhost.example.com.
 * <br>
 * 'r': Release name. eg. 
 * 5.1.2-RELEASE.
 * <br>
 * 'v': Version information. Varies a lot between
 * operating systems.
 * <br>
 * 'm': Machine type. eg. i386.
 * </p>
 * </p>
 * @return string the description, as a string.
 */
function php_uname (string $mode = null) {}

/**
 * Return a list of .ini files parsed from the additional ini dir
 * @link http://www.php.net/manual/en/function.php-ini-scanned-files.php
 * @return string a comma-separated string of .ini files on success. Each comma is
 * followed by a newline. If the configure directive --with-config-file-scan-dir wasn't set and the
 * PHP_INI_SCAN_DIR environment variable isn't set, false
 * is returned. If it was set and the directory was empty, an empty string is
 * returned. If a file is unrecognizable, the file will still make it into
 * the returned string but a PHP error will also result. This PHP error will
 * be seen both at compile time and while using
 * php_ini_scanned_files.
 */
function php_ini_scanned_files () {}

/**
 * Retrieve a path to the loaded php.ini file
 * @link http://www.php.net/manual/en/function.php-ini-loaded-file.php
 * @return string The loaded php.ini path, or false if one is not loaded.
 */
function php_ini_loaded_file () {}

/**
 * String comparisons using a "natural order" algorithm
 * @link http://www.php.net/manual/en/function.strnatcmp.php
 * @param string $str1 The first string.
 * @param string $str2 The second string.
 * @return int Similar to other string comparison functions, this one returns &lt; 0 if
 * str1 is less than str2; &gt;
 * 0 if str1 is greater than
 * str2, and 0 if they are equal.
 */
function strnatcmp (string $str1, string $str2) {}

/**
 * Case insensitive string comparisons using a "natural order" algorithm
 * @link http://www.php.net/manual/en/function.strnatcasecmp.php
 * @param string $str1 The first string.
 * @param string $str2 The second string.
 * @return int Similar to other string comparison functions, this one returns &lt; 0 if
 * str1 is less than str2 &gt;
 * 0 if str1 is greater than
 * str2, and 0 if they are equal.
 */
function strnatcasecmp (string $str1, string $str2) {}

/**
 * Count the number of substring occurrences
 * @link http://www.php.net/manual/en/function.substr-count.php
 * @param string $haystack The string to search in
 * @param string $needle The substring to search for
 * @param int $offset [optional] The offset where to start counting. If the offset is negative, counting
 * starts from the end of the string.
 * @param int $length [optional] The maximum length after the specified offset to search for the
 * substring. It outputs a warning if the offset plus the length is
 * greater than the haystack length.
 * A negative length counts from the end of haystack.
 * @return int This function returns an integer.
 */
function substr_count (string $haystack, string $needle, int $offset = null, int $length = null) {}

/**
 * Finds the length of the initial segment of a string consisting
 * entirely of characters contained within a given mask
 * @link http://www.php.net/manual/en/function.strspn.php
 * @param string $subject The string to examine.
 * @param string $mask The list of allowable characters.
 * @param int $start [optional] <p>
 * The position in subject to
 * start searching.
 * </p>
 * <p>
 * If start is given and is non-negative,
 * then strspn will begin
 * examining subject at
 * the start'th position. For instance, in
 * the string 'abcdef', the character at
 * position 0 is 'a', the
 * character at position 2 is
 * 'c', and so forth.
 * </p>
 * <p>
 * If start is given and is negative,
 * then strspn will begin
 * examining subject at
 * the start'th position from the end
 * of subject.
 * </p>
 * @param int $length [optional] <p>
 * The length of the segment from subject
 * to examine. 
 * </p>
 * <p>
 * If length is given and is non-negative,
 * then subject will be examined
 * for length characters after the starting
 * position.
 * </p>
 * <p>
 * If length is given and is negative,
 * then subject will be examined from the
 * starting position up to length
 * characters from the end of subject.
 * </p>
 * @return int the length of the initial segment of subject
 * which consists entirely of characters in mask.
 * <p>
 * When a start parameter is set, the returned length
 * is counted starting from this position, not from the beginning of
 * subject.
 * </p>
 */
function strspn (string $subject, string $mask, int $start = null, int $length = null) {}

/**
 * Find length of initial segment not matching mask
 * @link http://www.php.net/manual/en/function.strcspn.php
 * @param string $subject The string to examine.
 * @param string $mask The string containing every disallowed character.
 * @param int $start [optional] <p>
 * The position in subject to
 * start searching.
 * </p>
 * <p>
 * If start is given and is non-negative,
 * then strcspn will begin
 * examining subject at
 * the start'th position. For instance, in
 * the string 'abcdef', the character at
 * position 0 is 'a', the
 * character at position 2 is
 * 'c', and so forth.
 * </p>
 * <p>
 * If start is given and is negative,
 * then strcspn will begin
 * examining subject at
 * the start'th position from the end
 * of subject.
 * </p>
 * @param int $length [optional] <p>
 * The length of the segment from subject
 * to examine. 
 * </p>
 * <p>
 * If length is given and is non-negative,
 * then subject will be examined
 * for length characters after the starting
 * position.
 * </p>
 * <p>
 * If length is given and is negative,
 * then subject will be examined from the
 * starting position up to length
 * characters from the end of subject.
 * </p>
 * @return int the length of the initial segment of subject
 * which consists entirely of characters not in mask.
 * <p>
 * When a start parameter is set, the returned length
 * is counted starting from this position, not from the beginning of
 * subject.
 * </p>
 */
function strcspn (string $subject, string $mask, int $start = null, int $length = null) {}

/**
 * Tokenize string
 * @link http://www.php.net/manual/en/function.strtok.php
 * @param string $str The string being split up into smaller strings (tokens).
 * @param string $token The delimiter used when splitting up str.
 * @return string A string token.
 */
function strtok (string $str, string $token) {}

/**
 * Make a string uppercase
 * @link http://www.php.net/manual/en/function.strtoupper.php
 * @param string $string The input string.
 * @return string the uppercased string.
 */
function strtoupper (string $string) {}

/**
 * Make a string lowercase
 * @link http://www.php.net/manual/en/function.strtolower.php
 * @param string $string The input string.
 * @return string the lowercased string.
 */
function strtolower (string $string) {}

/**
 * Find the position of the first occurrence of a substring in a string
 * @link http://www.php.net/manual/en/function.strpos.php
 * @param string $haystack The string to search in.
 * @param mixed $needle If needle is not a string, it is converted
 * to an integer and applied as the ordinal value of a character.
 * @param int $offset [optional] If specified, search will start this number of characters counted from
 * the beginning of the string. If the offset is negative, the search will start
 * this number of characters counted from the end of the string.
 * @return int the position of where the needle exists relative to the beginning of
 * the haystack string (independent of offset).
 * Also note that string positions start at 0, and not 1.
 * <p>
 * Returns false if the needle was not found.
 * </p>
 */
function strpos (string $haystack, $needle, int $offset = null) {}

/**
 * Find the position of the first occurrence of a case-insensitive substring in a string
 * @link http://www.php.net/manual/en/function.stripos.php
 * @param string $haystack The string to search in.
 * @param mixed $needle <p>
 * Note that the needle may be a string of one or
 * more characters.
 * </p>
 * <p>
 * If needle is not a string, it is converted to
 * an integer and applied as the ordinal value of a character.
 * </p>
 * @param int $offset [optional] If specified, search will start this number of characters counted from
 * the beginning of the string. If the offset is negative, the search will start
 * this number of characters counted from the end of the string.
 * @return int the position of where the needle exists relative to the beginnning of
 * the haystack string (independent of offset).
 * Also note that string positions start at 0, and not 1.
 * <p>
 * Returns false if the needle was not found.
 * </p>
 */
function stripos (string $haystack, $needle, int $offset = null) {}

/**
 * Find the position of the last occurrence of a substring in a string
 * @link http://www.php.net/manual/en/function.strrpos.php
 * @param string $haystack The string to search in.
 * @param mixed $needle If needle is not a string, it is converted
 * to an integer and applied as the ordinal value of a character.
 * @param int $offset [optional] If specified, search will start this number of characters counted from the
 * beginning of the string. If the value is negative, search will instead start
 * from that many characters from the end of the string, searching backwards.
 * @return int the position where the needle exists relative to the beginning of
 * the haystack string (independent of search direction
 * or offset).
 * Also note that string positions start at 0, and not 1.
 * <p>
 * Returns false if the needle was not found.
 * </p>
 */
function strrpos (string $haystack, $needle, int $offset = null) {}

/**
 * Find the position of the last occurrence of a case-insensitive substring in a string
 * @link http://www.php.net/manual/en/function.strripos.php
 * @param string $haystack The string to search in.
 * @param mixed $needle If needle is not a string, it is converted
 * to an integer and applied as the ordinal value of a character.
 * @param int $offset [optional] If specified, search will start this number of characters counted from the
 * beginning of the string. If the value is negative, search will instead start
 * from that many characters from the end of the string, searching backwards.
 * @return int the position where the needle exists relative to the beginnning of
 * the haystack string (independent of search direction
 * or offset).
 * Also note that string positions start at 0, and not 1.
 * <p>
 * Returns false if the needle was not found.
 * </p>
 */
function strripos (string $haystack, $needle, int $offset = null) {}

/**
 * Reverse a string
 * @link http://www.php.net/manual/en/function.strrev.php
 * @param string $string The string to be reversed.
 * @return string the reversed string.
 */
function strrev (string $string) {}

/**
 * Convert logical Hebrew text to visual text
 * @link http://www.php.net/manual/en/function.hebrev.php
 * @param string $hebrew_text A Hebrew input string.
 * @param int $max_chars_per_line [optional] This optional parameter indicates maximum number of characters per
 * line that will be returned.
 * @return string the visual string.
 */
function hebrev (string $hebrew_text, int $max_chars_per_line = null) {}

/**
 * Convert logical Hebrew text to visual text with newline conversion
 * @link http://www.php.net/manual/en/function.hebrevc.php
 * @param string $hebrew_text A Hebrew input string.
 * @param int $max_chars_per_line [optional] This optional parameter indicates maximum number of characters per
 * line that will be returned.
 * @return string the visual string.
 */
function hebrevc (string $hebrew_text, int $max_chars_per_line = null) {}

/**
 * Inserts HTML line breaks before all newlines in a string
 * @link http://www.php.net/manual/en/function.nl2br.php
 * @param string $string The input string.
 * @param bool $is_xhtml [optional] Whether to use XHTML compatible line breaks or not.
 * @return string the altered string.
 */
function nl2br (string $string, bool $is_xhtml = null) {}

/**
 * Returns trailing name component of path
 * @link http://www.php.net/manual/en/function.basename.php
 * @param string $path <p>
 * A path.
 * </p>
 * <p>
 * On Windows, both slash (/) and backslash
 * (\) are used as directory separator character. In
 * other environments, it is the forward slash (/).
 * </p>
 * @param string $suffix [optional] If the name component ends in suffix this will also
 * be cut off.
 * @return string the base name of the given path.
 */
function basename (string $path, string $suffix = null) {}

/**
 * Returns a parent directory's path
 * @link http://www.php.net/manual/en/function.dirname.php
 * @param string $path <p>
 * A path.
 * </p>
 * <p>
 * On Windows, both slash (/) and backslash
 * (\) are used as directory separator character. In
 * other environments, it is the forward slash (/).
 * </p>
 * @param int $levels [optional] <p>
 * The number of parent directories to go up.
 * </p>
 * <p>
 * This must be an integer greater than 0.
 * </p>
 * @return string the path of a parent directory. If there are no slashes in
 * path, a dot ('.') is returned,
 * indicating the current directory. Otherwise, the returned string is
 * path with any trailing
 * /component removed.
 */
function dirname (string $path, int $levels = null) {}

/**
 * Returns information about a file path
 * @link http://www.php.net/manual/en/function.pathinfo.php
 * @param string $path The path to be parsed.
 * @param int $options [optional] <p>
 * If present, specifies a specific element to be returned; one of
 * PATHINFO_DIRNAME,
 * PATHINFO_BASENAME,
 * PATHINFO_EXTENSION or
 * PATHINFO_FILENAME.
 * </p>
 * <p>If options is not specified, returns all
 * available elements.
 * </p>
 * @return mixed If the options parameter is not passed, an
 * associative array containing the following elements is
 * returned:
 * dirname, basename,
 * extension (if any), and filename.
 * <p>
 * If the path has more than one extension,
 * PATHINFO_EXTENSION returns only the last one and
 * PATHINFO_FILENAME only strips the last one.
 * (see first example below).
 * </p>
 * <p>
 * If the path does not have an extension, no
 * extension element will be returned
 * (see second example below).
 * </p>
 * <p>
 * If the basename of the path starts
 * with a dot, the following characters are interpreted as
 * extension, and the filename is empty
 * (see third example below).
 * </p>
 * <p>
 * If options is present, returns a
 * string containing the requested element.
 * </p>
 */
function pathinfo (string $path, int $options = null) {}

/**
 * Un-quotes a quoted string
 * @link http://www.php.net/manual/en/function.stripslashes.php
 * @param string $str The input string.
 * @return string a string with backslashes stripped off.
 * (\' becomes ' and so on.)
 * Double backslashes (\\) are made into a single
 * backslash (\).
 */
function stripslashes (string $str) {}

/**
 * Un-quote string quoted with addcslashes
 * @link http://www.php.net/manual/en/function.stripcslashes.php
 * @param string $str The string to be unescaped.
 * @return string the unescaped string.
 */
function stripcslashes (string $str) {}

/**
 * Find the first occurrence of a string
 * @link http://www.php.net/manual/en/function.strstr.php
 * @param string $haystack The input string.
 * @param mixed $needle If needle is not a string, it is converted to
 * an integer and applied as the ordinal value of a character.
 * @param bool $before_needle [optional] If true, strstr returns
 * the part of the haystack before the first
 * occurrence of the needle (excluding the needle).
 * @return string the portion of string, or false if needle
 * is not found.
 */
function strstr (string $haystack, $needle, bool $before_needle = null) {}

/**
 * Case-insensitive strstr
 * @link http://www.php.net/manual/en/function.stristr.php
 * @param string $haystack The string to search in
 * @param mixed $needle If needle is not a string, it is converted to
 * an integer and applied as the ordinal value of a character.
 * @param bool $before_needle [optional] If true, stristr
 * returns the part of the haystack before the
 * first occurrence of the needle (excluding needle).
 * @return string the matched substring. If needle is not
 * found, returns false.
 */
function stristr (string $haystack, $needle, bool $before_needle = null) {}

/**
 * Find the last occurrence of a character in a string
 * @link http://www.php.net/manual/en/function.strrchr.php
 * @param string $haystack The string to search in
 * @param mixed $needle <p>
 * If needle contains more than one character,
 * only the first is used. This behavior is different from that of
 * strstr.
 * </p>
 * <p>
 * If needle is not a string, it is converted to
 * an integer and applied as the ordinal value of a character.
 * </p>
 * @return string This function returns the portion of string, or false if
 * needle is not found.
 */
function strrchr (string $haystack, $needle) {}

/**
 * Randomly shuffles a string
 * @link http://www.php.net/manual/en/function.str-shuffle.php
 * @param string $str The input string.
 * @return string the shuffled string.
 */
function str_shuffle (string $str) {}

/**
 * Return information about words used in a string
 * @link http://www.php.net/manual/en/function.str-word-count.php
 * @param string $string The string
 * @param int $format [optional] <p>
 * Specify the return value of this function. The current supported values
 * are:
 * <p>
 * <br>
 * 0 - returns the number of words found
 * <br>
 * 1 - returns an array containing all the words found inside the
 * string
 * <br>
 * 2 - returns an associative array, where the key is the numeric
 * position of the word inside the string and
 * the value is the actual word itself
 * </p>
 * </p>
 * @param string $charlist [optional] A list of additional characters which will be considered as 'word'
 * @return mixed an array or an integer, depending on the
 * format chosen.
 */
function str_word_count (string $string, int $format = null, string $charlist = null) {}

/**
 * Convert a string to an array
 * @link http://www.php.net/manual/en/function.str-split.php
 * @param string $string The input string.
 * @param int $split_length [optional] Maximum length of the chunk.
 * @return array If the optional split_length parameter is
 * specified, the returned array will be broken down into chunks with each
 * being split_length in length, otherwise each chunk
 * will be one character in length.
 * <p>
 * false is returned if split_length is less than 1.
 * If the split_length length exceeds the length of
 * string, the entire string is returned as the first
 * (and only) array element.
 * </p>
 */
function str_split (string $string, int $split_length = null) {}

/**
 * Search a string for any of a set of characters
 * @link http://www.php.net/manual/en/function.strpbrk.php
 * @param string $haystack The string where char_list is looked for.
 * @param string $char_list This parameter is case sensitive.
 * @return string a string starting from the character found, or false if it is
 * not found.
 */
function strpbrk (string $haystack, string $char_list) {}

/**
 * Binary safe comparison of two strings from an offset, up to length characters
 * @link http://www.php.net/manual/en/function.substr-compare.php
 * @param string $main_str The main string being compared.
 * @param string $str The secondary string being compared.
 * @param int $offset The start position for the comparison. If negative, it starts counting
 * from the end of the string.
 * @param int $length [optional] The length of the comparison. The default value is the largest of the
 * length of the str compared to the length of
 * main_str less the
 * offset.
 * @param bool $case_insensitivity [optional] If case_insensitivity is true, comparison is
 * case insensitive.
 * @return int &lt; 0 if main_str from position
 * offset is less than str, &gt;
 * 0 if it is greater than str, and 0 if they are equal.
 * If offset is equal to or greater than the length of
 * main_str, or the length is
 * set and is less than 1 (prior to PHP 5.5.11),
 * substr_compare prints a warning and returns
 * false.
 */
function substr_compare (string $main_str, string $str, int $offset, int $length = null, bool $case_insensitivity = null) {}

/**
 * Encodes an ISO-8859-1 string to UTF-8
 * @link http://www.php.net/manual/en/function.utf8-encode.php
 * @param string $data An ISO-8859-1 string.
 * @return string the UTF-8 translation of data.
 */
function utf8_encode (string $data) {}

/**
 * Converts a string with ISO-8859-1 characters encoded with UTF-8
 * to single-byte ISO-8859-1
 * @link http://www.php.net/manual/en/function.utf8-decode.php
 * @param string $data A UTF-8 encoded string.
 * @return string the ISO-8859-1 translation of data.
 */
function utf8_decode (string $data) {}

/**
 * Locale based string comparison
 * @link http://www.php.net/manual/en/function.strcoll.php
 * @param string $str1 The first string.
 * @param string $str2 The second string.
 * @return int &lt; 0 if str1 is less than
 * str2; &gt; 0 if
 * str1 is greater than
 * str2, and 0 if they are equal.
 */
function strcoll (string $str1, string $str2) {}

/**
 * Return part of a string
 * @link http://www.php.net/manual/en/function.substr.php
 * @param string $string The input string. Must be one character or longer.
 * @param int $start <p>
 * If start is non-negative, the returned string
 * will start at the start'th position in
 * string, counting from zero. For instance,
 * in the string 'abcdef', the character at
 * position 0 is 'a', the
 * character at position 2 is
 * 'c', and so forth.
 * </p>
 * <p>
 * If start is negative, the returned string
 * will start at the start'th character
 * from the end of string.
 * </p>
 * <p>
 * If string is less than
 * start characters long, false will be returned.
 * </p>
 * <p>
 * Using a negative start
 * <pre>
 * <code>&lt;?php
 * $rest = substr(&quot;abcdef&quot;, -1); &#47;&#47; returns &quot;f&quot;
 * $rest = substr(&quot;abcdef&quot;, -2); &#47;&#47; returns &quot;ef&quot;
 * $rest = substr(&quot;abcdef&quot;, -3, 1); &#47;&#47; returns &quot;d&quot;
 * ?&gt;</code>
 * </pre>
 * </p>
 * @param int $length [optional] <p>
 * If length is given and is positive, the string
 * returned will contain at most length characters
 * beginning from start (depending on the length of
 * string).
 * </p>
 * <p>
 * If length is given and is negative, then that many
 * characters will be omitted from the end of string
 * (after the start position has been calculated when a
 * start is negative). If
 * start denotes the position of this truncation or
 * beyond, false will be returned.
 * </p>
 * <p>
 * If length is given and is 0,
 * false or null, an empty string will be returned.
 * </p>
 * <p>
 * If length is omitted, the substring starting from
 * start until the end of the string will be
 * returned.
 * </p>
 * Using a negative length
 * <pre>
 * <code>&lt;?php
 * $rest = substr(&quot;abcdef&quot;, 0, -1); &#47;&#47; returns &quot;abcde&quot;
 * $rest = substr(&quot;abcdef&quot;, 2, -1); &#47;&#47; returns &quot;cde&quot;
 * $rest = substr(&quot;abcdef&quot;, 4, -4); &#47;&#47; returns false
 * $rest = substr(&quot;abcdef&quot;, -3, -1); &#47;&#47; returns &quot;de&quot;
 * ?&gt;</code>
 * </pre>
 * @return string the extracted part of string; or false on failure, or
 * an empty string.
 */
function substr (string $string, int $start, int $length = null) {}

/**
 * Replace text within a portion of a string
 * @link http://www.php.net/manual/en/function.substr-replace.php
 * @param mixed $string <p>
 * The input string.
 * </p>
 * <p>
 * An array of strings can be provided, in which
 * case the replacements will occur on each string in turn. In this case,
 * the replacement, start
 * and length parameters may be provided either as
 * scalar values to be applied to each input string in turn, or as
 * arrays, in which case the corresponding array element will
 * be used for each input string.
 * </p>
 * @param mixed $replacement The replacement string.
 * @param mixed $start <p>
 * If start is non-negative, the replacing will
 * begin at the start'th offset into
 * string.
 * </p>
 * <p>
 * If start is negative, the replacing will
 * begin at the start'th character from the
 * end of string.
 * </p>
 * @param mixed $length [optional] If given and is positive, it represents the length of the portion of
 * string which is to be replaced. If it is
 * negative, it represents the number of characters from the end of
 * string at which to stop replacing. If it
 * is not given, then it will default to strlen(
 * string ); i.e. end the replacing at the
 * end of string. Of course, if
 * length is zero then this function will have the
 * effect of inserting replacement into
 * string at the given
 * start offset.
 * @return mixed The result string is returned. If string is an
 * array then array is returned.
 */
function substr_replace ($string, $replacement, $start, $length = null) {}

/**
 * Quote meta characters
 * @link http://www.php.net/manual/en/function.quotemeta.php
 * @param string $str The input string.
 * @return string the string with meta characters quoted, or false if an empty
 * string is given as str.
 */
function quotemeta (string $str) {}

/**
 * Make a string's first character uppercase
 * @link http://www.php.net/manual/en/function.ucfirst.php
 * @param string $str The input string.
 * @return string the resulting string.
 */
function ucfirst (string $str) {}

/**
 * Make a string's first character lowercase
 * @link http://www.php.net/manual/en/function.lcfirst.php
 * @param string $str The input string.
 * @return string the resulting string.
 */
function lcfirst (string $str) {}

/**
 * Uppercase the first character of each word in a string
 * @link http://www.php.net/manual/en/function.ucwords.php
 * @param string $str The input string.
 * @param string $delimiters [optional] The optional delimiters contains the word separator characters.
 * @return string the modified string.
 */
function ucwords (string $str, string $delimiters = null) {}

/**
 * Translate characters or replace substrings
 * @link http://www.php.net/manual/en/function.strtr.php
 * @param string $str The string being translated.
 * @param string $from The string being translated to to.
 * @param string $to The string replacing from.
 * @return string the translated string.
 * <p>
 * If replace_pairs contains a key which
 * is an empty string (""),
 * false will be returned. If the str is not a scalar
 * then it is not typecasted into a string, instead a warning is raised and 
 * null is returned. 
 * </p>
 */
function strtr (string $str, string $from, string $to) {}

/**
 * Quote string with slashes
 * @link http://www.php.net/manual/en/function.addslashes.php
 * @param string $str The string to be escaped.
 * @return string the escaped string.
 */
function addslashes (string $str) {}

/**
 * Quote string with slashes in a C style
 * @link http://www.php.net/manual/en/function.addcslashes.php
 * @param string $str The string to be escaped.
 * @param string $charlist <p>
 * A list of characters to be escaped. If
 * charlist contains characters
 * \n, \r etc., they are
 * converted in C-like style, while other non-alphanumeric characters
 * with ASCII codes lower than 32 and higher than 126 converted to
 * octal representation.
 * </p>
 * <p>
 * When you define a sequence of characters in the charlist argument
 * make sure that you know what characters come between the
 * characters that you set as the start and end of the range.
 * <pre>
 * <code>&lt;?php
 * echo addcslashes('foo[ ]', 'A..z');
 * &#47;&#47; output: \f\o\o\[ \]
 * &#47;&#47; All upper and lower-case letters will be escaped
 * &#47;&#47; ... but so will the [\]^_`
 * ?&gt;</code>
 * </pre>
 * Also, if the first character in a range has a higher ASCII value
 * than the second character in the range, no range will be
 * constructed. Only the start, end and period characters will be
 * escaped. Use the ord function to find the
 * ASCII value for a character.
 * <pre>
 * <code>&lt;?php
 * echo addcslashes(&quot;zoo['.']&quot;, 'z..A');
 * &#47;&#47; output: \zoo['\.']
 * ?&gt;</code>
 * </pre>
 * </p>
 * <p>
 * Be careful if you choose to escape characters 0, a, b, f, n, r, t and
 * v. They will be converted to \0, \a, \b, \f, \n, \r, \t and \v, all of
 * which are predefined escape sequences in C. Many of these sequences are
 * also defined in other C-derived languages, including PHP, meaning that
 * you may not get the desired result if you use the output of
 * addcslashes to generate code in those languages
 * with these characters defined in charlist.
 * </p>
 * @return string the escaped string.
 */
function addcslashes (string $str, string $charlist) {}

/**
 * Strip whitespace (or other characters) from the end of a string
 * @link http://www.php.net/manual/en/function.rtrim.php
 * @param string $str The input string.
 * @param string $character_mask [optional] You can also specify the characters you want to strip, by means
 * of the character_mask parameter.
 * Simply list all characters that you want to be stripped. With
 * .. you can specify a range of characters.
 * @return string the modified string.
 */
function rtrim (string $str, string $character_mask = null) {}

/**
 * Replace all occurrences of the search string with the replacement string
 * @link http://www.php.net/manual/en/function.str-replace.php
 * @param mixed $search The value being searched for, otherwise known as the needle.
 * An array may be used to designate multiple needles.
 * @param mixed $replace The replacement value that replaces found search
 * values. An array may be used to designate multiple replacements.
 * @param mixed $subject <p>
 * The string or array being searched and replaced on,
 * otherwise known as the haystack.
 * </p>
 * <p>
 * If subject is an array, then the search and
 * replace is performed with every entry of
 * subject, and the return value is an array as
 * well.
 * </p>
 * @param int $count [optional] If passed, this will be set to the number of replacements performed.
 * @return mixed This function returns a string or an array with the replaced values.
 */
function str_replace ($search, $replace, $subject, int &$count = null) {}

/**
 * Case-insensitive version of str_replace
 * @link http://www.php.net/manual/en/function.str-ireplace.php
 * @param mixed $search The value being searched for, otherwise known as the
 * needle. An array may be used to designate
 * multiple needles.
 * @param mixed $replace The replacement value that replaces found search
 * values. An array may be used to designate multiple replacements.
 * @param mixed $subject <p>
 * The string or array being searched and replaced on,
 * otherwise known as the haystack.
 * </p>
 * <p>
 * If subject is an array, then the search and
 * replace is performed with every entry of 
 * subject, and the return value is an array as
 * well.
 * </p>
 * @param int $count [optional] If passed, this will be set to the number of replacements performed.
 * @return mixed a string or an array of replacements.
 */
function str_ireplace ($search, $replace, $subject, int &$count = null) {}

/**
 * Repeat a string
 * @link http://www.php.net/manual/en/function.str-repeat.php
 * @param string $input The string to be repeated.
 * @param int $multiplier <p>
 * Number of time the input string should be
 * repeated.
 * </p>
 * <p>
 * multiplier has to be greater than or equal to 0.
 * If the multiplier is set to 0, the function
 * will return an empty string.
 * </p>
 * @return string the repeated string.
 */
function str_repeat (string $input, int $multiplier) {}

/**
 * Return information about characters used in a string
 * @link http://www.php.net/manual/en/function.count-chars.php
 * @param string $string The examined string.
 * @param int $mode [optional] See return values.
 * @return mixed Depending on mode
 * count_chars returns one of the following:
 * <p>
 * <br>
 * 0 - an array with the byte-value as key and the frequency of
 * every byte as value.
 * <br>
 * 1 - same as 0 but only byte-values with a frequency greater
 * than zero are listed.
 * <br>
 * 2 - same as 0 but only byte-values with a frequency equal to
 * zero are listed.
 * <br>
 * 3 - a string containing all unique characters is returned.
 * <br>
 * 4 - a string containing all not used characters is returned.
 * </p>
 */
function count_chars (string $string, int $mode = null) {}

/**
 * Split a string into smaller chunks
 * @link http://www.php.net/manual/en/function.chunk-split.php
 * @param string $body The string to be chunked.
 * @param int $chunklen [optional] The chunk length.
 * @param string $end [optional] The line ending sequence.
 * @return string the chunked string.
 */
function chunk_split (string $body, int $chunklen = null, string $end = null) {}

/**
 * Strip whitespace (or other characters) from the beginning and end of a string
 * @link http://www.php.net/manual/en/function.trim.php
 * @param string $str The string that will be trimmed.
 * @param string $character_mask [optional] Optionally, the stripped characters can also be specified using
 * the character_mask parameter.
 * Simply list all characters that you want to be stripped. With
 * .. you can specify a range of characters.
 * @return string The trimmed string.
 */
function trim (string $str, string $character_mask = null) {}

/**
 * Strip whitespace (or other characters) from the beginning of a string
 * @link http://www.php.net/manual/en/function.ltrim.php
 * @param string $str The input string.
 * @param string $character_mask [optional] You can also specify the characters you want to strip, by means of the
 * character_mask parameter.
 * Simply list all characters that you want to be stripped. With
 * .. you can specify a range of characters.
 * @return string This function returns a string with whitespace stripped from the
 * beginning of str.
 * Without the second parameter,
 * ltrim will strip these characters:
 * <p>
 * <br>
 * " " (ASCII 32
 * (0x20)), an ordinary space.
 * <br>
 * "\t" (ASCII 9
 * (0x09)), a tab.
 * <br>
 * "\n" (ASCII 10
 * (0x0A)), a new line (line feed).
 * <br>
 * "\r" (ASCII 13
 * (0x0D)), a carriage return.
 * <br>
 * "\0" (ASCII 0
 * (0x00)), the NUL-byte.
 * <br>
 * "\x0B" (ASCII 11
 * (0x0B)), a vertical tab.
 * </p>
 */
function ltrim (string $str, string $character_mask = null) {}

/**
 * Strip HTML and PHP tags from a string
 * @link http://www.php.net/manual/en/function.strip-tags.php
 * @param string $str The input string.
 * @param string $allowable_tags [optional] <p>
 * You can use the optional second parameter to specify tags which should
 * not be stripped.
 * </p>
 * <p>
 * HTML comments and PHP tags are also stripped. This is hardcoded and
 * can not be changed with allowable_tags.
 * </p>
 * <p>
 * In PHP 5.3.4 and later, self-closing
 * XHTML tags are ignored and only non-self-closing tags should be used in
 * allowable_tags. For example,
 * to allow both &lt;br&gt; and
 * &lt;br/&gt;, you should use:
 * </p>
 * <pre>
 * <code>&lt;?php
 * strip_tags($input, '&lt;br&gt;');
 * ?&gt;</code>
 * </pre>
 * @return string the stripped string.
 */
function strip_tags (string $str, string $allowable_tags = null) {}

/**
 * Calculate the similarity between two strings
 * @link http://www.php.net/manual/en/function.similar-text.php
 * @param string $first The first string.
 * @param string $second <p>
 * The second string.
 * </p>
 * <p>
 * Swapping the first and
 * second may yield a different result; see the
 * example below.
 * </p>
 * @param float $percent [optional] By passing a reference as third argument,
 * similar_text will calculate the similarity in
 * percent, by dividing the result of similar_text by
 * the average of the lengths of the given strings times
 * 100.
 * @return int the number of matching chars in both strings.
 * <p>
 * The number of matching characters is calculated by finding the longest first
 * common substring, and then doing this for the prefixes and the suffixes,
 * recursively. The lengths of all found common substrings are added.
 * </p>
 */
function similar_text (string $first, string $second, float &$percent = null) {}

/**
 * Split a string by a string
 * @link http://www.php.net/manual/en/function.explode.php
 * @param string $delimiter The boundary string.
 * @param string $string The input string.
 * @param int $limit [optional] <p>
 * If limit is set and positive, the returned array will contain
 * a maximum of limit elements with the last
 * element containing the rest of string.
 * </p>
 * <p>
 * If the limit parameter is negative, all components
 * except the last -limit are returned.
 * </p>
 * <p>
 * If the limit parameter is zero, then this is treated as 1.
 * </p>
 * @return array an array of strings
 * created by splitting the string parameter on
 * boundaries formed by the delimiter.
 * <p>
 * If delimiter is an empty string (""),
 * explode will return false.
 * If delimiter contains a value that is not
 * contained in string and a negative
 * limit is used, then an empty array will be
 * returned, otherwise an array containing
 * string will be returned.
 * </p>
 */
function explode (string $delimiter, string $string, int $limit = null) {}

/**
 * Join array elements with a string
 * @link http://www.php.net/manual/en/function.implode.php
 * @param string $glue Defaults to an empty string.
 * @param array $pieces The array of strings to implode.
 * @return string a string containing a string representation of all the array
 * elements in the same order, with the glue string between each element.
 */
function implode (string $glue, array $pieces) {}

/**
 * Alias: implode
 * @link http://www.php.net/manual/en/function.join.php
 * @param mixed $glue
 * @param mixed $pieces
 */
function join ($glue, $pieces) {}

/**
 * Set locale information
 * @link http://www.php.net/manual/en/function.setlocale.php
 * @param int $category <p>
 * category is a named constant specifying the
 * category of the functions affected by the locale setting:
 * <p>
 * <br>
 * LC_ALL for all of the below
 * <br>
 * LC_COLLATE for string comparison, see
 * strcoll
 * <br>
 * LC_CTYPE for character classification and conversion, for
 * example strtoupper
 * <br>
 * LC_MONETARY for localeconv
 * <br>
 * LC_NUMERIC for decimal separator (See also
 * localeconv)
 * <br>
 * LC_TIME for date and time formatting with
 * strftime
 * <br>
 * LC_MESSAGES for system responses (available if PHP was compiled with
 * libintl)
 * </p>
 * </p>
 * @param string $locale <p>
 * If locale is null or the empty string
 * "", the locale names will be set from the
 * values of environment variables with the same names as the above
 * categories, or from "LANG".
 * </p>
 * <p>
 * If locale is "0",
 * the locale setting is not affected, only the current setting is returned.
 * </p>
 * <p>
 * If locale is an array or followed by additional
 * parameters then each array element or parameter is tried to be set as
 * new locale until success. This is useful if a locale is known under
 * different names on different systems or for providing a fallback
 * for a possibly not available locale.
 * </p>
 * @param string $_ [optional] 
 * @return string the new current locale, or false if the locale functionality is
 * not implemented on your platform, the specified locale does not exist or
 * the category name is invalid.
 * <p>
 * An invalid category name also causes a warning message. Category/locale
 * names can be found in RFC 1766
 * and ISO 639.
 * Different systems have different naming schemes for locales.
 * </p>
 * <p>
 * The return value of setlocale depends
 * on the system that PHP is running. It returns exactly
 * what the system setlocale function returns.
 * </p>
 */
function setlocale (int $category, string $locale, string $_ = null) {}

/**
 * Get numeric formatting information
 * @link http://www.php.net/manual/en/function.localeconv.php
 * @return array localeconv returns data based upon the current locale
 * as set by setlocale. The associative array that is
 * returned contains the following fields:
 * <table>
 * <tr valign="top">
 * <td>Array element</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>decimal_point</td>
 * <td>Decimal point character</td>
 * </tr>
 * <tr valign="top">
 * <td>thousands_sep</td>
 * <td>Thousands separator</td>
 * </tr>
 * <tr valign="top">
 * <td>grouping</td>
 * <td>Array containing numeric groupings</td>
 * </tr>
 * <tr valign="top">
 * <td>int_curr_symbol</td>
 * <td>International currency symbol (i.e. USD)</td>
 * </tr>
 * <tr valign="top">
 * <td>currency_symbol</td>
 * <td>Local currency symbol (i.e. $)</td>
 * </tr>
 * <tr valign="top">
 * <td>mon_decimal_point</td>
 * <td>Monetary decimal point character</td>
 * </tr>
 * <tr valign="top">
 * <td>mon_thousands_sep</td>
 * <td>Monetary thousands separator</td>
 * </tr>
 * <tr valign="top">
 * <td>mon_grouping</td>
 * <td>Array containing monetary groupings</td>
 * </tr>
 * <tr valign="top">
 * <td>positive_sign</td>
 * <td>Sign for positive values</td>
 * </tr>
 * <tr valign="top">
 * <td>negative_sign</td>
 * <td>Sign for negative values</td>
 * </tr>
 * <tr valign="top">
 * <td>int_frac_digits</td>
 * <td>International fractional digits</td>
 * </tr>
 * <tr valign="top">
 * <td>frac_digits</td>
 * <td>Local fractional digits</td>
 * </tr>
 * <tr valign="top">
 * <td>p_cs_precedes</td>
 * <td>
 * true if currency_symbol precedes a positive value, false
 * if it succeeds one
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>p_sep_by_space</td>
 * <td>
 * true if a space separates currency_symbol from a positive
 * value, false otherwise
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>n_cs_precedes</td>
 * <td>
 * true if currency_symbol precedes a negative value, false
 * if it succeeds one
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>n_sep_by_space</td>
 * <td>
 * true if a space separates currency_symbol from a negative
 * value, false otherwise
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>p_sign_posn</td>
 * <td>
 * <p>
 * 0 - Parentheses surround the quantity and currency_symbol
 * 1 - The sign string precedes the quantity and currency_symbol
 * 2 - The sign string succeeds the quantity and currency_symbol
 * 3 - The sign string immediately precedes the currency_symbol
 * 4 - The sign string immediately succeeds the currency_symbol
 * </p>
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>n_sign_posn</td>
 * <td>
 * <p>
 * 0 - Parentheses surround the quantity and currency_symbol
 * 1 - The sign string precedes the quantity and currency_symbol
 * 2 - The sign string succeeds the quantity and currency_symbol
 * 3 - The sign string immediately precedes the currency_symbol
 * 4 - The sign string immediately succeeds the currency_symbol
 * </p>
 * </td>
 * </tr>
 * </table>
 * <p>
 * The p_sign_posn, and n_sign_posn contain a string
 * of formatting options. Each number representing one of the above listed conditions.
 * </p>
 * <p>
 * The grouping fields contain arrays that define the way numbers should be
 * grouped. For example, the monetary grouping field for the nl_NL locale (in
 * UTF-8 mode with the euro sign), would contain a 2 item array with the
 * values 3 and 3. The higher the index in the array, the farther left the
 * grouping is. If an array element is equal to CHAR_MAX,
 * no further grouping is done. If an array element is equal to 0, the previous
 * element should be used.
 * </p>
 */
function localeconv () {}

/**
 * Calculate the soundex key of a string
 * @link http://www.php.net/manual/en/function.soundex.php
 * @param string $str The input string.
 * @return string the soundex key as a string.
 */
function soundex (string $str) {}

/**
 * Calculate Levenshtein distance between two strings
 * @link http://www.php.net/manual/en/function.levenshtein.php
 * @param string $str1 One of the strings being evaluated for Levenshtein distance.
 * @param string $str2 One of the strings being evaluated for Levenshtein distance.
 * @return int This function returns the Levenshtein-Distance between the
 * two argument strings or -1, if one of the argument strings
 * is longer than the limit of 255 characters.
 */
function levenshtein (string $str1, string $str2) {}

/**
 * Generate a single-byte string from a number
 * @link http://www.php.net/manual/en/function.chr.php
 * @param int $bytevalue <p>
 * An integer between 0 and 255.
 * </p>
 * <p>
 * Values outside the valid range (0..255) will be bitwise and'ed with 255,
 * which is equivalent to the following algorithm:
 * <pre>
 * while ($bytevalue < 0) {
 * $bytevalue += 256;
 * }
 * $bytevalue %= 256;
 * </pre>
 * </p>
 * @return string A single-character string containing the specified byte.
 */
function chr (int $bytevalue) {}

/**
 * Convert the first byte of a string to a value between 0 and 255
 * @link http://www.php.net/manual/en/function.ord.php
 * @param string $string A character.
 * @return int An integer between 0 and 255.
 */
function ord (string $string) {}

/**
 * Parses the string into variables
 * @link http://www.php.net/manual/en/function.parse-str.php
 * @param string $encoded_string The input string.
 * @param array $result [optional] <p>
 * If the second parameter result is present,
 * variables are stored in this variable as array elements instead.
 * </p>
 * <p>
 * Using this function without the result parameter is highly
 * DISCOURAGED and DEPRECATED as of PHP 7.2.
 * </p>
 * <p>
 * Dynamically setting variables in function's scope suffers from exactly same problems
 * as register_globals.
 * </p>
 * <p>
 * Read section on security of Using Register Globals
 * explaining why it is dangerous.
 * </p>
 * @return void 
 */
function parse_str (string $encoded_string, array &$result = null) {}

/**
 * Parse a CSV string into an array
 * @link http://www.php.net/manual/en/function.str-getcsv.php
 * @param string $input The string to parse.
 * @param string $delimiter [optional] Set the field delimiter (one character only).
 * @param string $enclosure [optional] Set the field enclosure character (one character only).
 * @param string $escape [optional] <p>
 * Set the escape character (one character only). Defaults as a backslash
 * (\)
 * </p>
 * Usually an enclosure character is escaped inside
 * a field by doubling it; however, the escape
 * character can be used as an alternative. So for the default parameter
 * values "" and \" have the same
 * meaning. Other than allowing to escape the
 * enclosure character the
 * escape character has no special meaning; it isn't
 * even meant to escape itself.
 * @return array an indexed array containing the fields read.
 */
function str_getcsv (string $input, string $delimiter = null, string $enclosure = null, string $escape = null) {}

/**
 * Pad a string to a certain length with another string
 * @link http://www.php.net/manual/en/function.str-pad.php
 * @param string $input The input string.
 * @param int $pad_length If the value of pad_length is negative,
 * less than, or equal to the length of the input string, no padding
 * takes place, and input will be returned.
 * @param string $pad_string [optional] The pad_string may be truncated if the
 * required number of padding characters can't be evenly divided by the
 * pad_string's length.
 * @param int $pad_type [optional] Optional argument pad_type can be
 * STR_PAD_RIGHT, STR_PAD_LEFT,
 * or STR_PAD_BOTH. If
 * pad_type is not specified it is assumed to be
 * STR_PAD_RIGHT.
 * @return string the padded string.
 */
function str_pad (string $input, int $pad_length, string $pad_string = null, int $pad_type = null) {}

/**
 * Alias: rtrim
 * @link http://www.php.net/manual/en/function.chop.php
 * @param mixed $str
 * @param mixed $character_mask [optional]
 */
function chop ($str, $character_mask = null) {}

/**
 * Alias: strstr
 * @link http://www.php.net/manual/en/function.strchr.php
 * @param mixed $haystack
 * @param mixed $needle
 * @param mixed $part [optional]
 */
function strchr ($haystack, $needle, $part = null) {}

/**
 * Return a formatted string
 * @link http://www.php.net/manual/en/function.sprintf.php
 * @param string $format <p>
 * The format string is composed of zero or more directives:
 * ordinary characters (excluding %) that are
 * copied directly to the result and conversion
 * specifications, each of which results in fetching its
 * own parameter. This applies to both sprintf
 * and printf.
 * </p>
 * <p>
 * Each conversion specification consists of a percent sign
 * (%), followed by one or more of these
 * elements, in order:
 * <p>
 * <br>
 * An optional sign specifier that forces a sign
 * (- or +) to be used on a number. By default, only the - sign is used
 * on a number if it's negative. This specifier forces positive numbers
 * to have the + sign attached as well.
 * <br>
 * An optional padding specifier that says
 * what character will be used for padding the results to the
 * right string size. This may be a space character or a
 * 0 (zero character). The default is to pad
 * with spaces. An alternate padding character can be specified
 * by prefixing it with a single quote (').
 * See the examples below.
 * <br>
 * An optional alignment specifier that says
 * if the result should be left-justified or right-justified.
 * The default is right-justified; a -
 * character here will make it left-justified.
 * <br>
 * An optional number, a width specifier
 * that says how many characters (minimum) this conversion should
 * result in.
 * <br>
 * An optional precision specifier in the form
 * of a period (.) followed by an optional decimal digit string
 * that says how many decimal digits should be displayed for
 * floating-point numbers. When using this specifier on a string,
 * it acts as a cutoff point, setting a maximum character limit to
 * the string. Additionally, the character to use when padding a
 * number may optionally be specified between the period and the
 * digit.
 * <br>
 * <p>
 * A type specifier that says what type the
 * argument data should be treated as. Possible types:
 * <p>
 * % - a literal percent character. No
 * argument is required.
 * b - the argument is treated as an
 * integer and presented as a binary number.
 * c - the argument is treated as an
 * integer and presented as the character with that ASCII
 * value.
 * d - the argument is treated as an
 * integer and presented as a (signed) decimal number.
 * e - the argument is treated as scientific
 * notation (e.g. 1.2e+2).
 * The precision specifier stands for the number of digits after the
 * decimal point since PHP 5.2.1. In earlier versions, it was taken as
 * number of significant digits (one less).
 * E - like %e but uses
 * uppercase letter (e.g. 1.2E+2).
 * f - the argument is treated as a
 * float and presented as a floating-point number (locale aware).
 * F - the argument is treated as a
 * float and presented as a floating-point number (non-locale aware).
 * Available since PHP 5.0.3.
 * g - shorter of %e and
 * %f.
 * G - shorter of %E and
 * %f.
 * o - the argument is treated as an
 * integer and presented as an octal number.
 * s - the argument is treated as and
 * presented as a string.
 * u - the argument is treated as an
 * integer and presented as an unsigned decimal number.
 * x - the argument is treated as an integer
 * and presented as a hexadecimal number (with lowercase
 * letters).
 * X - the argument is treated as an integer
 * and presented as a hexadecimal number (with uppercase
 * letters).
 * </p>
 * </p>
 * </p>
 * </p>
 * <p>
 * Variables will be co-erced to a suitable type for the specifier:
 * <table>
 * Type Handling
 * <table>
 * <tr valign="top">
 * <td>Type</td>
 * <td>Specifiers</td>
 * </tr>
 * <tr valign="top">
 * <td>string</td>
 * <td>s</td>
 * </tr>
 * <tr valign="top">
 * <td>integer</td>
 * <td>
 * d, 
 * u, 
 * c,
 * o,
 * x,
 * X,
 * b
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>double</td>
 * <td>
 * g,
 * G,
 * e,
 * E,
 * f,
 * F
 * </td>
 * </tr>
 * </table>
 * </table>
 * </p>
 * <p>
 * Attempting to use a combination of the string and width specifiers with character sets that require more than one byte per character may result in unexpected results
 * </p>
 * <p>
 * The format string supports argument numbering/swapping. Here is an
 * example:
 * Argument swapping
 * <pre>
 * <code>&lt;?php
 * $num = 5;
 * $location = 'tree';
 * $format = 'There are %d monkeys in the %s';
 * echo sprintf($format, $num, $location);
 * ?&gt;</code>
 * </pre>
 * This will output "There are 5 monkeys in the tree". But
 * imagine we are creating a format string in a separate file,
 * commonly because we would like to internationalize it and we
 * rewrite it as:
 * Argument swapping
 * <pre>
 * <code>&lt;?php
 * $format = 'The %s contains %d monkeys';
 * echo sprintf($format, $num, $location);
 * ?&gt;</code>
 * </pre>
 * We now have a problem. The order of the placeholders in the
 * format string does not match the order of the arguments in the
 * code. We would like to leave the code as is and simply indicate
 * in the format string which arguments the placeholders refer to.
 * We would write the format string like this instead:
 * Argument swapping
 * <pre>
 * <code>&lt;?php
 * $format = 'The %2$s contains %1$d monkeys';
 * echo sprintf($format, $num, $location);
 * ?&gt;</code>
 * </pre>
 * An added benefit here is that you can repeat the placeholders without
 * adding more arguments in the code. For example:
 * Argument swapping
 * <pre>
 * <code>&lt;?php
 * $format = 'The %2$s contains %1$d monkeys.
 * That\'s a nice %2$s full of %1$d monkeys.';
 * echo sprintf($format, $num, $location);
 * ?&gt;</code>
 * </pre>
 * When using argument swapping, the n$
 * position specifier must come immediately
 * after the percent sign (%), before any other
 * specifiers, as shown in the example below.
 * Specifying padding character
 * <pre>
 * <code>&lt;?php
 * echo sprintf(&quot;%'.9d\n&quot;, 123);
 * echo sprintf(&quot;%'.09d\n&quot;, 123);
 * ?&gt;</code>
 * </pre>
 * <p>The above example will output:</p>
 * <pre>
 * ......123
 * 000000123
 * </pre>
 * Position specifier with other specifiers
 * <pre>
 * <code>&lt;?php
 * $format = 'The %2$s contains %1$04d monkeys';
 * echo sprintf($format, $num, $location);
 * ?&gt;</code>
 * </pre>
 * <p>The above example will output:</p>
 * <pre>
 * The tree contains 0005 monkeys
 * </pre>
 * </p>
 * <p>
 * Attempting to use a position specifier greater than
 * PHP_INT_MAX will result in
 * sprintf generating warnings.
 * </p>
 * <p>
 * The c type specifier ignores padding and width
 * </p>
 * @param mixed $args [optional] 
 * @param mixed $_ [optional] 
 * @return string a string produced according to the formatting string
 * format, or false on failure.
 */
function sprintf (string $format, $args = null, $_ = null) {}

/**
 * Output a formatted string
 * @link http://www.php.net/manual/en/function.printf.php
 * @param string $format See sprintf for a description of
 * format.
 * @param mixed $args [optional] 
 * @param mixed $_ [optional] 
 * @return int the length of the outputted string.
 */
function printf (string $format, $args = null, $_ = null) {}

/**
 * Output a formatted string
 * @link http://www.php.net/manual/en/function.vprintf.php
 * @param string $format See sprintf for a description of
 * format.
 * @param array $args 
 * @return int the length of the outputted string.
 */
function vprintf (string $format, array $args) {}

/**
 * Return a formatted string
 * @link http://www.php.net/manual/en/function.vsprintf.php
 * @param string $format See sprintf for a description of
 * format.
 * @param array $args 
 * @return string Return array values as a formatted string according to
 * format (which is described in the documentation
 * for sprintf).
 */
function vsprintf (string $format, array $args) {}

/**
 * Write a formatted string to a stream
 * @link http://www.php.net/manual/en/function.fprintf.php
 * @param resource $handle fs.file.pointer
 * @param string $format See sprintf for a description of 
 * format.
 * @param mixed $args [optional] 
 * @param mixed $_ [optional] 
 * @return int the length of the string written.
 */
function fprintf ($handle, string $format, $args = null, $_ = null) {}

/**
 * Write a formatted string to a stream
 * @link http://www.php.net/manual/en/function.vfprintf.php
 * @param resource $handle 
 * @param string $format See sprintf for a description of
 * format.
 * @param array $args 
 * @return int the length of the outputted string.
 */
function vfprintf ($handle, string $format, array $args) {}

/**
 * Parses input from a string according to a format
 * @link http://www.php.net/manual/en/function.sscanf.php
 * @param string $str The input string being parsed.
 * @param string $format <p>
 * The interpreted format for str, which is
 * described in the documentation for sprintf with
 * following differences:
 * <p>
 * Function is not locale-aware.
 * F, g, G and
 * b are not supported.
 * D stands for decimal number.
 * i stands for integer with base detection.
 * n stands for number of characters processed so far.
 * s stops reading at any whitespace character.
 * </p>
 * </p>
 * @param mixed $_ [optional] 
 * @return mixed If only two parameters were passed to this function, the values parsed will
 * be returned as an array. Otherwise, if optional parameters are passed, the
 * function will return the number of assigned values. The optional parameters
 * must be passed by reference.
 * <p>
 * If there are more substrings expected in the format
 * than there are available within str,
 * -1 will be returned.
 * </p>
 */
function sscanf (string $str, string $format, &$_ = null) {}

/**
 * Parses input from a file according to a format
 * @link http://www.php.net/manual/en/function.fscanf.php
 * @param resource $handle fs.file.pointer
 * @param string $format The specified format as described in the 
 * sprintf documentation.
 * @param mixed $_ [optional] 
 * @return mixed If only two parameters were passed to this function, the values parsed will be
 * returned as an array. Otherwise, if optional parameters are passed, the
 * function will return the number of assigned values. The optional
 * parameters must be passed by reference.
 */
function fscanf ($handle, string $format, &$_ = null) {}

/**
 * Parse a URL and return its components
 * @link http://www.php.net/manual/en/function.parse-url.php
 * @param string $url The URL to parse. Invalid characters are replaced by
 * _.
 * @param int $component [optional] Specify one of PHP_URL_SCHEME,
 * PHP_URL_HOST, PHP_URL_PORT,
 * PHP_URL_USER, PHP_URL_PASS,
 * PHP_URL_PATH, PHP_URL_QUERY
 * or PHP_URL_FRAGMENT to retrieve just a specific
 * URL component as a string (except when
 * PHP_URL_PORT is given, in which case the return
 * value will be an integer).
 * @return mixed On seriously malformed URLs, parse_url may return
 * false.
 * <p>
 * If the component parameter is omitted, an
 * associative array is returned. At least one element will be
 * present within the array. Potential keys within this array are:
 * <p>
 * <br>
 * scheme - e.g. http
 * <br>
 * host 
 * <br>
 * port
 * <br>
 * user
 * <br>
 * pass
 * <br>
 * path
 * <br>
 * query - after the question mark ?
 * <br>
 * fragment - after the hashmark #
 * </p>
 * </p>
 * <p>
 * If the component parameter is specified,
 * parse_url returns a string (or an
 * integer, in the case of PHP_URL_PORT)
 * instead of an array. If the requested component doesn't exist
 * within the given URL, null will be returned.
 * </p>
 */
function parse_url (string $url, int $component = null) {}

/**
 * URL-encodes string
 * @link http://www.php.net/manual/en/function.urlencode.php
 * @param string $str The string to be encoded.
 * @return string a string in which all non-alphanumeric characters except
 * -_. have been replaced with a percent
 * (%) sign followed by two hex digits and spaces encoded
 * as plus (+) signs. It is encoded the same way that the
 * posted data from a WWW form is encoded, that is the same way as in
 * application/x-www-form-urlencoded media type. This
 * differs from the RFC 3986 encoding (see
 * rawurlencode) in that for historical reasons, spaces
 * are encoded as plus (+) signs.
 */
function urlencode (string $str) {}

/**
 * Decodes URL-encoded string
 * @link http://www.php.net/manual/en/function.urldecode.php
 * @param string $str The string to be decoded.
 * @return string the decoded string.
 */
function urldecode (string $str) {}

/**
 * URL-encode according to RFC 3986
 * @link http://www.php.net/manual/en/function.rawurlencode.php
 * @param string $str The URL to be encoded.
 * @return string a string in which all non-alphanumeric characters except
 * -_.~ have been replaced with a percent
 * (%) sign followed by two hex digits. This is the
 * encoding described in RFC 3986 for
 * protecting literal characters from being interpreted as special URL
 * delimiters, and for protecting URLs from being mangled by transmission
 * media with character conversions (like some email systems).
 * <p>
 * Prior to PHP 5.3.0, rawurlencode encoded tildes (~) as per
 * RFC 1738.
 * </p>
 */
function rawurlencode (string $str) {}

/**
 * Decode URL-encoded strings
 * @link http://www.php.net/manual/en/function.rawurldecode.php
 * @param string $str The URL to be decoded.
 * @return string the decoded URL, as a string.
 */
function rawurldecode (string $str) {}

/**
 * Generate URL-encoded query string
 * @link http://www.php.net/manual/en/function.http-build-query.php
 * @param mixed $query_data <p>
 * May be an array or object containing properties.
 * </p>
 * <p>
 * If query_data is an array, it may be a simple
 * one-dimensional structure, or an array of arrays (which in
 * turn may contain other arrays).
 * </p>
 * <p>
 * If query_data is an object, then only public
 * properties will be incorporated into the result.
 * </p>
 * @param string $numeric_prefix [optional] <p>
 * If numeric indices are used in the base array and this parameter is
 * provided, it will be prepended to the numeric index for elements in
 * the base array only.
 * </p>
 * <p>
 * This is meant to allow for legal variable names when the data is
 * decoded by PHP or another CGI application later on.
 * </p>
 * @param string $arg_separator [optional] arg_separator.output
 * is used to separate arguments but may be overridden by specifying
 * this parameter.
 * @param int $enc_type [optional] <p>
 * By default, PHP_QUERY_RFC1738.
 * </p>
 * <p>
 * If enc_type is
 * PHP_QUERY_RFC1738, then encoding is performed per
 * RFC 1738 and the
 * application/x-www-form-urlencoded media type, which
 * implies that spaces are encoded as plus (+) signs.
 * </p>
 * <p>
 * If enc_type is
 * PHP_QUERY_RFC3986, then encoding is performed
 * according to RFC 3986, and
 * spaces will be percent encoded (%20).
 * </p>
 * @return string a URL-encoded string.
 */
function http_build_query ($query_data, string $numeric_prefix = null, string $arg_separator = null, int $enc_type = null) {}

/**
 * Returns the target of a symbolic link
 * @link http://www.php.net/manual/en/function.readlink.php
 * @param string $path The symbolic link path.
 * @return string the contents of the symbolic link path or false on error.
 */
function readlink (string $path) {}

/**
 * Gets information about a link
 * @link http://www.php.net/manual/en/function.linkinfo.php
 * @param string $path Path to the link.
 * @return int linkinfo returns the st_dev field
 * of the Unix C stat structure returned by the lstat
 * system call. Returns 0 or false in case of error.
 */
function linkinfo (string $path) {}

/**
 * Creates a symbolic link
 * @link http://www.php.net/manual/en/function.symlink.php
 * @param string $target Target of the link.
 * @param string $link The link name.
 * @return bool true on success or false on failure
 */
function symlink (string $target, string $link) {}

/**
 * Create a hard link
 * @link http://www.php.net/manual/en/function.link.php
 * @param string $target Target of the link.
 * @param string $link The link name.
 * @return bool true on success or false on failure
 */
function link (string $target, string $link) {}

/**
 * Deletes a file
 * @link http://www.php.net/manual/en/function.unlink.php
 * @param string $filename Path to the file.
 * @param resource $context [optional] note.context-support
 * @return bool true on success or false on failure
 */
function unlink (string $filename, $context = null) {}

/**
 * Execute an external program
 * @link http://www.php.net/manual/en/function.exec.php
 * @param string $command The command that will be executed.
 * @param array $output [optional] If the output argument is present, then the
 * specified array will be filled with every line of output from the
 * command. Trailing whitespace, such as \n, is not
 * included in this array. Note that if the array already contains some
 * elements, exec will append to the end of the array.
 * If you do not want the function to append elements, call
 * unset on the array before passing it to
 * exec.
 * @param int $return_var [optional] If the return_var argument is present
 * along with the output argument, then the
 * return status of the executed command will be written to this
 * variable.
 * @return string The last line from the result of the command. If you need to execute a 
 * command and have all the data from the command passed directly back without 
 * any interference, use the passthru function.
 * <p>
 * To get the output of the executed command, be sure to set and use the
 * output parameter.
 * </p>
 */
function exec (string $command, array &$output = null, int &$return_var = null) {}

/**
 * Execute an external program and display the output
 * @link http://www.php.net/manual/en/function.system.php
 * @param string $command The command that will be executed.
 * @param int $return_var [optional] If the return_var argument is present, then the
 * return status of the executed command will be written to this
 * variable.
 * @return string the last line of the command output on success, and false
 * on failure.
 */
function system (string $command, int &$return_var = null) {}

/**
 * Escape shell metacharacters
 * @link http://www.php.net/manual/en/function.escapeshellcmd.php
 * @param string $command The command that will be escaped.
 * @return string The escaped string.
 */
function escapeshellcmd (string $command) {}

/**
 * Escape a string to be used as a shell argument
 * @link http://www.php.net/manual/en/function.escapeshellarg.php
 * @param string $arg The argument that will be escaped.
 * @return string The escaped string.
 */
function escapeshellarg (string $arg) {}

/**
 * Execute an external program and display raw output
 * @link http://www.php.net/manual/en/function.passthru.php
 * @param string $command The command that will be executed.
 * @param int $return_var [optional] If the return_var argument is present, the 
 * return status of the Unix command will be placed here.
 * @return void 
 */
function passthru (string $command, int &$return_var = null) {}

/**
 * Execute command via shell and return the complete output as a string
 * @link http://www.php.net/manual/en/function.shell-exec.php
 * @param string $cmd The command that will be executed.
 * @return string The output from the executed command or null if an error occurred or the
 * command produces no output.
 * <p>
 * This function can return null both when an error occurs or the program
 * produces no output. It is not possible to detect execution failures using
 * this function. exec should be used when access to the
 * program exit code is required.
 * </p>
 */
function shell_exec (string $cmd) {}

/**
 * Execute a command and open file pointers for input/output
 * @link http://www.php.net/manual/en/function.proc-open.php
 * @param string $cmd The command to execute
 * @param array $descriptorspec <p>
 * An indexed array where the key represents the descriptor number and the
 * value represents how PHP will pass that descriptor to the child
 * process. 0 is stdin, 1 is stdout, while 2 is stderr.
 * </p>
 * <p>
 * Each element can be:
 * <p>
 * An array describing the pipe to pass to the process. The first
 * element is the descriptor type and the second element is an option for
 * the given type. Valid types are pipe (the second
 * element is either r to pass the read end of the pipe
 * to the process, or w to pass the write end) and
 * file (the second element is a filename).
 * A stream resource representing a real file descriptor (e.g. opened file,
 * a socket, STDIN).
 * </p>
 * </p>
 * <p>
 * The file descriptor numbers are not limited to 0, 1 and 2 - you may
 * specify any valid file descriptor number and it will be passed to the
 * child process. This allows your script to interoperate with other
 * scripts that run as "co-processes". In particular, this is useful for
 * passing passphrases to programs like PGP, GPG and openssl in a more
 * secure manner. It is also useful for reading status information
 * provided by those programs on auxiliary file descriptors.
 * </p>
 * @param array $pipes Will be set to an indexed array of file pointers that correspond to
 * PHP's end of any pipes that are created.
 * @param string $cwd [optional] The initial working dir for the command. This must be an
 * absolute directory path, or null
 * if you want to use the default value (the working dir of the current
 * PHP process)
 * @param array $env [optional] An array with the environment variables for the command that will be
 * run, or null to use the same environment as the current PHP process
 * @param array $other_options [optional] <p>
 * Allows you to specify additional options. Currently supported options
 * include:
 * <p>
 * suppress_errors (windows only): suppresses errors
 * generated by this function when it's set to true
 * bypass_shell (windows only): bypass
 * cmd.exe shell when set to true
 * </p>
 * </p>
 * @return resource a resource representing the process, which should be freed using
 * proc_close when you are finished with it. On failure
 * returns false.
 */
function proc_open (string $cmd, array $descriptorspec, array &$pipes, string $cwd = null, array $env = null, array $other_options = null) {}

/**
 * Close a process opened by proc_open and return the exit code of that process
 * @link http://www.php.net/manual/en/function.proc-close.php
 * @param resource $process The proc_open resource that will
 * be closed.
 * @return int the termination status of the process that was run. In case of 
 * an error then -1 is returned.
 */
function proc_close ($process) {}

/**
 * Kills a process opened by proc_open
 * @link http://www.php.net/manual/en/function.proc-terminate.php
 * @param resource $process The proc_open resource that will
 * be closed.
 * @param int $signal [optional] This optional parameter is only useful on POSIX
 * operating systems; you may specify a signal to send to the process
 * using the kill(2) system call. The default is
 * SIGTERM.
 * @return bool the termination status of the process that was run.
 */
function proc_terminate ($process, int $signal = null) {}

/**
 * Get information about a process opened by proc_open
 * @link http://www.php.net/manual/en/function.proc-get-status.php
 * @param resource $process The proc_open resource that will
 * be evaluated.
 * @return array An array of collected information on success, and false
 * on failure. The returned array contains the following elements:
 * <p>
 * <table>
 * <tr valign="top"><td>element</td><td>type</td><td>description</td></tr>
 * <tr valign="top">
 * <td>command</td>
 * <td>string</td>
 * <td>
 * The command string that was passed to proc_open.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>pid</td>
 * <td>int</td>
 * <td>process id</td>
 * </tr>
 * <tr valign="top">
 * <td>running</td>
 * <td>bool</td>
 * <td>
 * true if the process is still running, false if it has
 * terminated.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>signaled</td>
 * <td>bool</td>
 * <td>
 * true if the child process has been terminated by
 * an uncaught signal. Always set to false on Windows.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>stopped</td>
 * <td>bool</td>
 * <td>
 * true if the child process has been stopped by a
 * signal. Always set to false on Windows.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>exitcode</td>
 * <td>int</td>
 * <td>
 * The exit code returned by the process (which is only
 * meaningful if running is false).
 * Only first call of this function return real value, next calls return
 * -1.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>termsig</td>
 * <td>int</td>
 * <td>
 * The number of the signal that caused the child process to terminate
 * its execution (only meaningful if signaled is true).
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>stopsig</td>
 * <td>int</td>
 * <td>
 * The number of the signal that caused the child process to stop its
 * execution (only meaningful if stopped is true).
 * </td>
 * </tr>
 * </table>
 * </p>
 */
function proc_get_status ($process) {}

/**
 * Change the priority of the current process
 * @link http://www.php.net/manual/en/function.proc-nice.php
 * @param int $increment <p>
 * The new priority value, the value of this may differ on platforms.
 * </p>
 * <p>
 * On Unix, a low value, such as -20 means high priority 
 * wheras a positive value have a lower priority.
 * </p>
 * <p>
 * For Windows the increment parameter have the 
 * following meanings:
 * </p>
 * <table>
 * <tr valign="top">
 * <td>Priority class</td>
 * <td>Possible values</td>
 * </tr>
 * <tr valign="top">
 * <td>High priority</td>
 * <td>
 * increment &lt; -9
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>Above normal priority</td>
 * <td>
 * increment &lt; -4
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>Normal priority</td>
 * <td>
 * increment &lt; 5 &amp; 
 * increment &gt; -5
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>Below normal priority</td>
 * <td>
 * increment &gt; 5
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>Idle priority</td>
 * <td>
 * increment &gt; 9
 * </td>
 * </tr>
 * </table>
 * @return bool true on success or false on failure
 * If an error occurs, like the user lacks permission to change the priority, 
 * an error of level E_WARNING is also generated.
 */
function proc_nice (int $increment) {}

/**
 * Generate a random integer
 * @link http://www.php.net/manual/en/function.rand.php
 * @param mixed $min [optional]
 * @param mixed $max [optional]
 * @return int A pseudo random value between min
 * (or 0) and max (or getrandmax, inclusive).
 */
function rand ($min = null, $max = null) {}

/**
 * Seed the random number generator
 * @link http://www.php.net/manual/en/function.srand.php
 * @param int $seed [optional] An arbitrary integer seed value.
 * @return void 
 */
function srand (int $seed = null) {}

/**
 * Show largest possible random value
 * @link http://www.php.net/manual/en/function.getrandmax.php
 * @return int The largest possible random value returned by rand
 */
function getrandmax () {}

/**
 * Generate a random value via the Mersenne Twister Random Number Generator
 * @link http://www.php.net/manual/en/function.mt-rand.php
 * @param mixed $min [optional]
 * @param mixed $max [optional]
 * @return int A random integer value between min (or 0)
 * and max (or mt_getrandmax, inclusive),
 * or false if max is less than min.
 */
function mt_rand ($min = null, $max = null) {}

/**
 * Seeds the Mersenne Twister Random Number Generator
 * @link http://www.php.net/manual/en/function.mt-srand.php
 * @param int $seed [optional] An arbitrary integer seed value.
 * @param int $mode [optional] Use one of the following constants to specify the implementation of the algorithm to use.
 * <table>
 * <tr valign="top">
 * <td>Constant</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>MT_RAND_MT19937</td>
 * <td>
 * Uses the fixed, correct, Mersenne Twister implementation, available as of PHP 7.1.0.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>MT_RAND_PHP</td>
 * <td>
 * Uses an incorrect Mersenne Twister implementation which was used as the default up till PHP 7.1.0. 
 * This mode is available for backward compatibility.
 * </td>
 * </tr>
 * </table>
 * @return void 
 */
function mt_srand (int $seed = null, int $mode = null) {}

/**
 * Show largest possible random value
 * @link http://www.php.net/manual/en/function.mt-getrandmax.php
 * @return int the maximum random value returned by a call to
 * mt_rand without arguments, which is the maximum value 
 * that can be used for its max parameter without the
 * result being scaled up (and therefore less random).
 */
function mt_getrandmax () {}

/**
 * Generates cryptographically secure pseudo-random bytes
 * @link http://www.php.net/manual/en/function.random-bytes.php
 * @param int $length The length of the random string that should be returned in bytes.
 * @return string a string containing the requested number of cryptographically
 * secure random bytes.
 */
function random_bytes (int $length) {}

/**
 * Generates cryptographically secure pseudo-random integers
 * @link http://www.php.net/manual/en/function.random-int.php
 * @param int $min The lowest value to be returned, which must be
 * PHP_INT_MIN or higher.
 * @param int $max The highest value to be returned, which must be less than or equal to
 * PHP_INT_MAX.
 * @return int a cryptographically secure random integer in the range
 * min to max, inclusive.
 */
function random_int (int $min, int $max) {}

/**
 * Get port number associated with an Internet service and protocol
 * @link http://www.php.net/manual/en/function.getservbyname.php
 * @param string $service The Internet service name, as a string.
 * @param string $protocol protocol is either "tcp"
 * or "udp" (in lowercase).
 * @return int the port number, or false if service or
 * protocol is not found.
 */
function getservbyname (string $service, string $protocol) {}

/**
 * Get Internet service which corresponds to port and protocol
 * @link http://www.php.net/manual/en/function.getservbyport.php
 * @param int $port The port number.
 * @param string $protocol protocol is either "tcp"
 * or "udp" (in lowercase).
 * @return string the Internet service name as a string.
 */
function getservbyport (int $port, string $protocol) {}

/**
 * Get protocol number associated with protocol name
 * @link http://www.php.net/manual/en/function.getprotobyname.php
 * @param string $name The protocol name.
 * @return int the protocol number, or false on failure.
 */
function getprotobyname (string $name) {}

/**
 * Get protocol name associated with protocol number
 * @link http://www.php.net/manual/en/function.getprotobynumber.php
 * @param int $number The protocol number.
 * @return string the protocol name as a string, or false on failure.
 */
function getprotobynumber (int $number) {}

/**
 * Gets PHP script owner's UID
 * @link http://www.php.net/manual/en/function.getmyuid.php
 * @return int the user ID of the current script, or false on error.
 */
function getmyuid () {}

/**
 * Get PHP script owner's GID
 * @link http://www.php.net/manual/en/function.getmygid.php
 * @return int the group ID of the current script, or false on error.
 */
function getmygid () {}

/**
 * Gets PHP's process ID
 * @link http://www.php.net/manual/en/function.getmypid.php
 * @return int the current PHP process ID, or false on error.
 */
function getmypid () {}

/**
 * Gets the inode of the current script
 * @link http://www.php.net/manual/en/function.getmyinode.php
 * @return int the current script's inode as an integer, or false on error.
 */
function getmyinode () {}

/**
 * Gets time of last page modification
 * @link http://www.php.net/manual/en/function.getlastmod.php
 * @return int the time of the last modification of the current
 * page. The value returned is a Unix timestamp, suitable for
 * feeding to date. Returns false on error.
 */
function getlastmod () {}

/**
 * Decodes data encoded with MIME base64
 * @link http://www.php.net/manual/en/function.base64-decode.php
 * @param string $data The encoded data.
 * @param bool $strict [optional] If the strict parameter is set to true
 * then the base64_decode function will return
 * false if the input contains character from outside the base64
 * alphabet. Otherwise invalid characters will be silently discarded.
 * @return string the decoded data or false on failure. The returned data may be
 * binary.
 */
function base64_decode (string $data, bool $strict = null) {}

/**
 * Encodes data with MIME base64
 * @link http://www.php.net/manual/en/function.base64-encode.php
 * @param string $data The data to encode.
 * @return string The encoded data, as a string.
 */
function base64_encode (string $data) {}

/**
 * Creates a password hash
 * @link http://www.php.net/manual/en/function.password-hash.php
 * @param string $password <p>
 * The useraposs password.
 * </p>
 * <p>
 * Using the PASSWORD_BCRYPT as the
 * algorithm, will result
 * in the password parameter being truncated to a
 * maximum length of 72 characters.
 * </p>
 * @param int $algo A password algorithm constant denoting the algorithm to use when hashing the password.
 * @param array $options [optional] <p>
 * An associative array containing options. See the password algorithm constants for documentation on the supported options for each algorithm.
 * </p>
 * <p>
 * If omitted, a random salt will be created and the default cost will be
 * used.
 * </p>
 * @return string the hashed password, or false on failure.
 * <p>
 * The used algorithm, cost and salt are returned as part of the hash. Therefore,
 * all information that's needed to verify the hash is included in it. This allows
 * the password_verify function to verify the hash without
 * needing separate storage for the salt or algorithm information.
 * </p>
 */
function password_hash (string $password, int $algo, array $options = null) {}

/**
 * Returns information about the given hash
 * @link http://www.php.net/manual/en/function.password-get-info.php
 * @param string $hash A hash created by password_hash.
 * @return array an associative array with three elements: 
 * <p>
 * <br>
 * algo, which will match a
 * password algorithm constant
 * <br>
 * algoName, which has the human readable name of the
 * algorithm
 * <br>
 * options, which includes the options
 * provided when calling password_hash
 * </p>
 */
function password_get_info (string $hash) {}

/**
 * Checks if the given hash matches the given options
 * @link http://www.php.net/manual/en/function.password-needs-rehash.php
 * @param string $hash A hash created by password_hash.
 * @param int $algo A password algorithm constant denoting the algorithm to use when hashing the password.
 * @param array $options [optional] An associative array containing options. See the password algorithm constants for documentation on the supported options for each algorithm.
 * @return bool true if the hash should be rehashed to match the given
 * algo and options, or false
 * otherwise.
 */
function password_needs_rehash (string $hash, int $algo, array $options = null) {}

/**
 * Verifies that a password matches a hash
 * @link http://www.php.net/manual/en/function.password-verify.php
 * @param string $password The useraposs password.
 * @param string $hash A hash created by password_hash.
 * @return bool true if the password and hash match, or false otherwise.
 */
function password_verify (string $password, string $hash) {}

/**
 * Uuencode a string
 * @link http://www.php.net/manual/en/function.convert-uuencode.php
 * @param string $data The data to be encoded.
 * @return string the uuencoded data or false on failure.
 */
function convert_uuencode (string $data) {}

/**
 * Decode a uuencoded string
 * @link http://www.php.net/manual/en/function.convert-uudecode.php
 * @param string $data The uuencoded data.
 * @return string the decoded data as a string or false on failure.
 */
function convert_uudecode (string $data) {}

/**
 * Absolute value
 * @link http://www.php.net/manual/en/function.abs.php
 * @param mixed $number The numeric value to process
 * @return number The absolute value of number. If the
 * argument number is
 * of type float, the return type is also float,
 * otherwise it is integer (as float usually has a
 * bigger value range than integer).
 */
function abs ($number) {}

/**
 * Round fractions up
 * @link http://www.php.net/manual/en/function.ceil.php
 * @param float $value The value to round
 * @return float value rounded up to the next highest
 * integer.
 * The return value of ceil is still of type
 * float as the value range of float is 
 * usually bigger than that of integer.
 */
function ceil (float $value) {}

/**
 * Round fractions down
 * @link http://www.php.net/manual/en/function.floor.php
 * @param float $value The numeric value to round
 * @return float value rounded to the next lowest integer.
 * The return value of floor is still of type
 * float because the value range of float is 
 * usually bigger than that of integer.
 * This function returns false in case of an error (e.g. passing an array).
 */
function floor (float $value) {}

/**
 * Rounds a float
 * @link http://www.php.net/manual/en/function.round.php
 * @param float $val The value to round
 * @param int $precision [optional] The optional number of decimal digits to round to.
 * @param int $mode [optional] Use one of the following constants to specify the mode in which rounding occurs.
 * <table>
 * <tr valign="top">
 * <td>Constant</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>PHP_ROUND_HALF_UP</td>
 * <td>
 * Round val up to precision decimal places
 * away from zero, when it is half way there. Making 1.5 into 2 and -1.5 into -2.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>PHP_ROUND_HALF_DOWN</td>
 * <td>
 * Round val down to precision decimal places
 * towards zero, when it is half way there. Making 1.5 into 1 and -1.5 into -1.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>PHP_ROUND_HALF_EVEN</td>
 * <td>
 * Round val to precision decimal places
 * towards the nearest even value.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>PHP_ROUND_HALF_ODD</td>
 * <td>
 * Round val to precision decimal places
 * towards the nearest odd value. 
 * </td>
 * </tr>
 * </table>
 * @return float The rounded value
 */
function round (float $val, int $precision = null, int $mode = null) {}

/**
 * Sine
 * @link http://www.php.net/manual/en/function.sin.php
 * @param float $arg A value in radians
 * @return float The sine of arg
 */
function sin (float $arg) {}

/**
 * Cosine
 * @link http://www.php.net/manual/en/function.cos.php
 * @param float $arg An angle in radians
 * @return float The cosine of arg
 */
function cos (float $arg) {}

/**
 * Tangent
 * @link http://www.php.net/manual/en/function.tan.php
 * @param float $arg The argument to process in radians
 * @return float The tangent of arg
 */
function tan (float $arg) {}

/**
 * Arc sine
 * @link http://www.php.net/manual/en/function.asin.php
 * @param float $arg The argument to process
 * @return float The arc sine of arg in radians
 */
function asin (float $arg) {}

/**
 * Arc cosine
 * @link http://www.php.net/manual/en/function.acos.php
 * @param float $arg The argument to process
 * @return float The arc cosine of arg in radians.
 */
function acos (float $arg) {}

/**
 * Arc tangent
 * @link http://www.php.net/manual/en/function.atan.php
 * @param float $arg The argument to process
 * @return float The arc tangent of arg in radians.
 */
function atan (float $arg) {}

/**
 * Inverse hyperbolic tangent
 * @link http://www.php.net/manual/en/function.atanh.php
 * @param float $arg The argument to process
 * @return float Inverse hyperbolic tangent of arg
 */
function atanh (float $arg) {}

/**
 * Arc tangent of two variables
 * @link http://www.php.net/manual/en/function.atan2.php
 * @param float $y Dividend parameter
 * @param float $x Divisor parameter
 * @return float The arc tangent of y/x 
 * in radians.
 */
function atan2 (float $y, float $x) {}

/**
 * Hyperbolic sine
 * @link http://www.php.net/manual/en/function.sinh.php
 * @param float $arg The argument to process
 * @return float The hyperbolic sine of arg
 */
function sinh (float $arg) {}

/**
 * Hyperbolic cosine
 * @link http://www.php.net/manual/en/function.cosh.php
 * @param float $arg The argument to process
 * @return float The hyperbolic cosine of arg
 */
function cosh (float $arg) {}

/**
 * Hyperbolic tangent
 * @link http://www.php.net/manual/en/function.tanh.php
 * @param float $arg The argument to process
 * @return float The hyperbolic tangent of arg
 */
function tanh (float $arg) {}

/**
 * Inverse hyperbolic sine
 * @link http://www.php.net/manual/en/function.asinh.php
 * @param float $arg The argument to process
 * @return float The inverse hyperbolic sine of arg
 */
function asinh (float $arg) {}

/**
 * Inverse hyperbolic cosine
 * @link http://www.php.net/manual/en/function.acosh.php
 * @param float $arg The value to process
 * @return float The inverse hyperbolic cosine of arg
 */
function acosh (float $arg) {}

/**
 * Returns exp(number) - 1, computed in a way that is accurate even
 * when the value of number is close to zero
 * @link http://www.php.net/manual/en/function.expm1.php
 * @param float $arg The argument to process
 * @return float 'e' to the power of arg minus one
 */
function expm1 (float $arg) {}

/**
 * Returns log(1 + number), computed in a way that is accurate even when
 * the value of number is close to zero
 * @link http://www.php.net/manual/en/function.log1p.php
 * @param float $number The argument to process
 * @return float log(1 + number)
 */
function log1p (float $number) {}

/**
 * Get value of pi
 * @link http://www.php.net/manual/en/function.pi.php
 * @return float The value of pi as float.
 */
function pi () {}

/**
 * Finds whether a value is a legal finite number
 * @link http://www.php.net/manual/en/function.is-finite.php
 * @param float $val The value to check
 * @return bool true if val is a legal finite
 * number within the allowed range for a PHP float on this platform,
 * else false.
 */
function is_finite (float $val) {}

/**
 * Finds whether a value is not a number
 * @link http://www.php.net/manual/en/function.is-nan.php
 * @param float $val The value to check
 * @return bool true if val is 'not a number',
 * else false.
 */
function is_nan (float $val) {}

/**
 * Finds whether a value is infinite
 * @link http://www.php.net/manual/en/function.is-infinite.php
 * @param float $val The value to check
 * @return bool true if val is infinite, else false.
 */
function is_infinite (float $val) {}

/**
 * Exponential expression
 * @link http://www.php.net/manual/en/function.pow.php
 * @param number $base The base to use
 * @param number $exp The exponent
 * @return number base raised to the power of exp.
 * If both arguments are non-negative integers and the result can be represented
 * as an integer, the result will be returned with integer type,
 * otherwise it will be returned as a float.
 */
function pow ($base, $exp) {}

/**
 * Calculates the exponent of e
 * @link http://www.php.net/manual/en/function.exp.php
 * @param float $arg The argument to process
 * @return float 'e' raised to the power of arg
 */
function exp (float $arg) {}

/**
 * Natural logarithm
 * @link http://www.php.net/manual/en/function.log.php
 * @param float $arg The value to calculate the logarithm for
 * @param float $base [optional] The optional logarithmic base to use 
 * (defaults to 'e' and so to the natural logarithm).
 * @return float The logarithm of arg to 
 * base, if given, or the
 * natural logarithm.
 */
function log (float $arg, float $base = null) {}

/**
 * Base-10 logarithm
 * @link http://www.php.net/manual/en/function.log10.php
 * @param float $arg The argument to process
 * @return float The base-10 logarithm of arg
 */
function log10 (float $arg) {}

/**
 * Square root
 * @link http://www.php.net/manual/en/function.sqrt.php
 * @param float $arg The argument to process
 * @return float The square root of arg
 * or the special value NAN for negative numbers.
 */
function sqrt (float $arg) {}

/**
 * Calculate the length of the hypotenuse of a right-angle triangle
 * @link http://www.php.net/manual/en/function.hypot.php
 * @param float $x Length of first side
 * @param float $y Length of second side
 * @return float Calculated length of the hypotenuse
 */
function hypot (float $x, float $y) {}

/**
 * Converts the number in degrees to the radian equivalent
 * @link http://www.php.net/manual/en/function.deg2rad.php
 * @param float $number Angular value in degrees
 * @return float The radian equivalent of number
 */
function deg2rad (float $number) {}

/**
 * Converts the radian number to the equivalent number in degrees
 * @link http://www.php.net/manual/en/function.rad2deg.php
 * @param float $number A radian value
 * @return float The equivalent of number in degrees
 */
function rad2deg (float $number) {}

/**
 * Binary to decimal
 * @link http://www.php.net/manual/en/function.bindec.php
 * @param string $binary_string The binary string to convert
 * @return number The decimal value of binary_string
 */
function bindec (string $binary_string) {}

/**
 * Hexadecimal to decimal
 * @link http://www.php.net/manual/en/function.hexdec.php
 * @param string $hex_string The hexadecimal string to convert
 * @return number The decimal representation of hex_string
 */
function hexdec (string $hex_string) {}

/**
 * Octal to decimal
 * @link http://www.php.net/manual/en/function.octdec.php
 * @param string $octal_string The octal string to convert
 * @return number The decimal representation of octal_string
 */
function octdec (string $octal_string) {}

/**
 * Decimal to binary
 * @link http://www.php.net/manual/en/function.decbin.php
 * @param int $number <p>
 * Decimal value to convert
 * </p>
 * <table>
 * Range of inputs on 32-bit machines
 * <table>
 * <tr valign="top">
 * <td>positive number</td>
 * <td>negative number</td>
 * <td>return value</td>
 * </tr>
 * <tr valign="top">
 * <td>0</td>
 * <td></td>
 * <td>0</td>
 * </tr>
 * <tr valign="top">
 * <td>1</td>
 * <td></td>
 * <td>1</td>
 * </tr>
 * <tr valign="top">
 * <td>2</td>
 * <td></td>
 * <td>10</td>
 * </tr>
 * <tr valign="top">
 * <td>... normal progression ...</td>
 * </tr>
 * <tr valign="top">
 * <td>2147483646</td>
 * <td></td>
 * <td>1111111111111111111111111111110</td>
 * </tr>
 * <tr valign="top">
 * <td>2147483647 (largest signed integer)</td>
 * <td></td>
 * <td>1111111111111111111111111111111 (31 1's)</td>
 * </tr>
 * <tr valign="top">
 * <td>2147483648</td>
 * <td>-2147483648</td>
 * <td>10000000000000000000000000000000</td>
 * </tr>
 * <tr valign="top">
 * <td>... normal progression ...</td>
 * </tr>
 * <tr valign="top">
 * <td>4294967294</td>
 * <td>-2</td>
 * <td>11111111111111111111111111111110</td>
 * </tr>
 * <tr valign="top">
 * <td>4294967295 (largest unsigned integer)</td>
 * <td>-1</td>
 * <td>11111111111111111111111111111111 (32 1's)</td>
 * </tr>
 * </table>
 * </table>
 * <table>
 * Range of inputs on 64-bit machines
 * <table>
 * <tr valign="top">
 * <td>positive number</td>
 * <td>negative number</td>
 * <td>return value</td>
 * </tr>
 * <tr valign="top">
 * <td>0</td>
 * <td></td>
 * <td>0</td>
 * </tr>
 * <tr valign="top">
 * <td>1</td>
 * <td></td>
 * <td>1</td>
 * </tr>
 * <tr valign="top">
 * <td>2</td>
 * <td></td>
 * <td>10</td>
 * </tr>
 * <tr valign="top">
 * <td>... normal progression ...</td>
 * </tr>
 * <tr valign="top">
 * <td>9223372036854775806</td>
 * <td></td>
 * <td>111111111111111111111111111111111111111111111111111111111111110</td>
 * </tr>
 * <tr valign="top">
 * <td>9223372036854775807 (largest signed integer)</td>
 * <td></td>
 * <td>111111111111111111111111111111111111111111111111111111111111111 (63 1's)</td>
 * </tr>
 * <tr valign="top">
 * <td></td>
 * <td>-9223372036854775808</td>
 * <td>1000000000000000000000000000000000000000000000000000000000000000</td>
 * </tr>
 * <tr valign="top">
 * <td>... normal progression ...</td>
 * </tr>
 * <tr valign="top">
 * <td></td>
 * <td>-2</td>
 * <td>1111111111111111111111111111111111111111111111111111111111111110</td>
 * </tr>
 * <tr valign="top">
 * <td></td>
 * <td>-1</td>
 * <td>1111111111111111111111111111111111111111111111111111111111111111 (64 1's)</td>
 * </tr>
 * </table>
 * </table>
 * @return string Binary string representation of number
 */
function decbin (int $number) {}

/**
 * Decimal to octal
 * @link http://www.php.net/manual/en/function.decoct.php
 * @param int $number Decimal value to convert
 * @return string Octal string representation of number
 */
function decoct (int $number) {}

/**
 * Decimal to hexadecimal
 * @link http://www.php.net/manual/en/function.dechex.php
 * @param int $number <p>
 * The decimal value to convert.
 * </p>
 * <p>
 * As PHP's integer type is signed, but
 * dechex deals with unsigned integers, negative
 * integers will be treated as though they were unsigned.
 * </p>
 * @return string Hexadecimal string representation of number.
 */
function dechex (int $number) {}

/**
 * Convert a number between arbitrary bases
 * @link http://www.php.net/manual/en/function.base-convert.php
 * @param string $number The number to convert. Any invalid characters in
 * number are silently ignored.
 * @param int $frombase The base number is in
 * @param int $tobase The base to convert number to
 * @return string number converted to base tobase
 */
function base_convert (string $number, int $frombase, int $tobase) {}

/**
 * Format a number with grouped thousands
 * @link http://www.php.net/manual/en/function.number-format.php
 * @param float $number The number being formatted.
 * @param int $decimals [optional] Sets the number of decimal points.
 * @return string A formatted version of number.
 */
function number_format (float $number, int $decimals = null) {}

/**
 * Returns the floating point remainder (modulo) of the division
 * of the arguments
 * @link http://www.php.net/manual/en/function.fmod.php
 * @param float $x The dividend
 * @param float $y The divisor
 * @return float The floating point remainder of 
 * x/y
 */
function fmod (float $x, float $y) {}

/**
 * Integer division
 * @link http://www.php.net/manual/en/function.intdiv.php
 * @param int $dividend Number to be divided.
 * @param int $divisor Number which divides the dividend.
 * @return int The integer quotient of the division of dividend by divisor.
 */
function intdiv (int $dividend, int $divisor) {}

/**
 * Converts a packed internet address to a human readable representation
 * @link http://www.php.net/manual/en/function.inet-ntop.php
 * @param string $in_addr A 32bit IPv4, or 128bit IPv6 address.
 * @return string a string representation of the address or false on failure.
 */
function inet_ntop (string $in_addr) {}

/**
 * Converts a human readable IP address to its packed in_addr representation
 * @link http://www.php.net/manual/en/function.inet-pton.php
 * @param string $address A human readable IPv4 or IPv6 address.
 * @return string the in_addr representation of the given
 * address, or false if a syntactically invalid
 * address is given (for example, an IPv4 address
 * without dots or an IPv6 address without colons).
 */
function inet_pton (string $address) {}

/**
 * Converts a string containing an (IPv4) Internet Protocol dotted address into a long integer
 * @link http://www.php.net/manual/en/function.ip2long.php
 * @param string $ip_address A standard format address.
 * @return int the long integer or false if ip_address
 * is invalid.
 */
function ip2long (string $ip_address) {}

/**
 * Converts an long integer address into a string in (IPv4) Internet standard dotted format
 * @link http://www.php.net/manual/en/function.long2ip.php
 * @param int $proper_address A proper address representation in long integer.
 * @return string the Internet IP address as a string.
 */
function long2ip (int $proper_address) {}

/**
 * Gets the value of an environment variable
 * @link http://www.php.net/manual/en/function.getenv.php
 * @param string $varname The variable name.
 * @param bool $local_only [optional] Set to true to only return local environment variables (set by the operating system or putenv).
 * @return string the value of the environment variable
 * varname, or false if the environment
 * variable varname does not exist.
 * If varname is omitted, all environment variables are
 * returned as associative array.
 */
function getenv (string $varname, bool $local_only = null) {}

/**
 * Sets the value of an environment variable
 * @link http://www.php.net/manual/en/function.putenv.php
 * @param string $setting The setting, like "FOO=BAR"
 * @return bool true on success or false on failure
 */
function putenv (string $setting) {}

/**
 * Gets options from the command line argument list
 * @link http://www.php.net/manual/en/function.getopt.php
 * @param string $options Each character in this string will be used as option characters and
 * matched against options passed to the script starting with a single
 * hyphen (-).
 * For example, an option string "x" recognizes an
 * option -x.
 * Only a-z, A-Z and 0-9 are allowed.
 * @param array $longopts [optional] An array of options. Each element in this array will be used as option
 * strings and matched against options passed to the script starting with
 * two hyphens (--).
 * For example, an longopts element "opt" recognizes an
 * option --opt.
 * @param int $optind [optional] If the optind parameter is present, then the
 * index where argument parsing stopped will be written to this variable.
 * @return array This function will return an array of option / argument pairs, or false on failure.
 * <p>
 * The parsing of options will end at the first non-option found, anything
 * that follows is discarded.
 * </p>
 */
function getopt (string $options, array $longopts = null, int &$optind = null) {}

/**
 * Return current Unix timestamp with microseconds
 * @link http://www.php.net/manual/en/function.microtime.php
 * @param bool $get_as_float [optional] If used and set to true, microtime will return a
 * float instead of a string, as described in
 * the return values section below.
 * @return mixed By default, microtime returns a string in
 * the form "msec sec", where sec is the number of seconds 
 * since the Unix epoch (0:00:00 January 1,1970 GMT), and msec 
 * measures microseconds that have elapsed since sec 
 * and is also expressed in seconds.
 * <p>
 * If get_as_float is set to true, then
 * microtime returns a float, which
 * represents the current time in seconds since the Unix epoch accurate to the
 * nearest microsecond.
 * </p>
 */
function microtime (bool $get_as_float = null) {}

/**
 * Get current time
 * @link http://www.php.net/manual/en/function.gettimeofday.php
 * @param bool $return_float [optional] When set to true, a float instead of an array is returned.
 * @return mixed By default an array is returned. If return_float
 * is set, then a float is returned.
 * <p>
 * Array keys:
 * <p>
 * <br>
 * "sec" - seconds since the Unix Epoch
 * <br>
 * "usec" - microseconds
 * <br>
 * "minuteswest" - minutes west of Greenwich
 * <br>
 * "dsttime" - type of dst correction
 * </p>
 * </p>
 */
function gettimeofday (bool $return_float = null) {}

/**
 * Gets the current resource usages
 * @link http://www.php.net/manual/en/function.getrusage.php
 * @param int $who [optional] If who is 1, getrusage will be called with
 * RUSAGE_CHILDREN.
 * @return array an associative array containing the data returned from the system
 * call. All entries are accessible by using their documented field names.
 */
function getrusage (int $who = null) {}

/**
 * Get the system's high resolution time
 * @link http://www.php.net/manual/en/function.hrtime.php
 * @param bool $get_as_number [optional] Whether the high resolution time should be returned as array
 * or number.
 * @return mixed an array of integers in the form [seconds, nanoseconds], if the
 * parameter get_as_number is false. Otherwise the nanoseconds
 * are returned as integer (64bit platforms) or float
 * (32bit platforms).
 */
function hrtime (bool $get_as_number = null) {}

/**
 * Generate a unique ID
 * @link http://www.php.net/manual/en/function.uniqid.php
 * @param string $prefix [optional] <p>
 * Can be useful, for instance, if you generate identifiers
 * simultaneously on several hosts that might happen to generate the
 * identifier at the same microsecond.
 * </p>
 * <p>
 * With an empty prefix, the returned string will
 * be 13 characters long. If more_entropy is
 * true, it will be 23 characters.
 * </p>
 * @param bool $more_entropy [optional] If set to true, uniqid will add additional
 * entropy (using the combined linear congruential generator) at the end
 * of the return value, which increases the likelihood that the result
 * will be unique.
 * @return string timestamp based unique identifier as a string.
 * <p>
 * This function tries to create unique identifier, but it does not
 * guarantee 100% uniqueness of return value.
 * </p>
 */
function uniqid (string $prefix = null, bool $more_entropy = null) {}

/**
 * Convert a quoted-printable string to an 8 bit string
 * @link http://www.php.net/manual/en/function.quoted-printable-decode.php
 * @param string $str The input string.
 * @return string the 8-bit binary string.
 */
function quoted_printable_decode (string $str) {}

/**
 * Convert a 8 bit string to a quoted-printable string
 * @link http://www.php.net/manual/en/function.quoted-printable-encode.php
 * @param string $str The input string.
 * @return string the encoded string.
 */
function quoted_printable_encode (string $str) {}

/**
 * Convert from one Cyrillic character set to another
 * @link http://www.php.net/manual/en/function.convert-cyr-string.php
 * @param string $str The string to be converted.
 * @param string $from The source Cyrillic character set, as a single character.
 * @param string $to The target Cyrillic character set, as a single character.
 * @return string the converted string.
 */
function convert_cyr_string (string $str, string $from, string $to) {}

/**
 * Gets the name of the owner of the current PHP script
 * @link http://www.php.net/manual/en/function.get-current-user.php
 * @return string the username as a string.
 */
function get_current_user () {}

/**
 * Limits the maximum execution time
 * @link http://www.php.net/manual/en/function.set-time-limit.php
 * @param int $seconds The maximum execution time, in seconds. If set to zero, no time limit
 * is imposed.
 * @return bool true on success, or false on failure.
 */
function set_time_limit (int $seconds) {}

/**
 * Call a header function
 * @link http://www.php.net/manual/en/function.header-register-callback.php
 * @param callable $callback Function called just before the headers are sent. It gets no parameters
 * and the return value is ignored.
 * @return bool true on success or false on failure
 */
function header_register_callback (callable $callback) {}

/**
 * Gets the value of a PHP configuration option
 * @link http://www.php.net/manual/en/function.get-cfg-var.php
 * @param string $option The configuration option name.
 * @return mixed the current value of the PHP configuration variable specified by
 * option, or false if an error occurs.
 */
function get_cfg_var (string $option) {}

/**
 * Gets the current configuration setting of magic_quotes_gpc
 * @link http://www.php.net/manual/en/function.get-magic-quotes-gpc.php
 * @return bool 0 if magic_quotes_gpc is off, 1 otherwise. 
 * Or always returns false as of PHP 5.4.0.
 */
function get_magic_quotes_gpc () {}

/**
 * Gets the current active configuration setting of magic_quotes_runtime
 * @link http://www.php.net/manual/en/function.get-magic-quotes-runtime.php
 * @return bool 0 if magic_quotes_runtime is off, 1 otherwise. 
 * Or always returns false as of PHP 5.4.0.
 */
function get_magic_quotes_runtime () {}

/**
 * Send an error message to the defined error handling routines
 * @link http://www.php.net/manual/en/function.error-log.php
 * @param string $message The error message that should be logged.
 * @param int $message_type [optional] <p>
 * Says where the error should go. The possible message types are as 
 * follows:
 * </p>
 * <p>
 * <table>
 * error_log log types
 * <table>
 * <tr valign="top">
 * <td>0</td>
 * <td>
 * message is sent to PHP's system logger, using
 * the Operating System's system logging mechanism or a file, depending
 * on what the error_log
 * configuration directive is set to. This is the default option.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>1</td>
 * <td>
 * message is sent by email to the address in
 * the destination parameter. This is the only
 * message type where the fourth parameter,
 * extra_headers is used.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>2</td>
 * <td>
 * No longer an option.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>3</td>
 * <td>
 * message is appended to the file
 * destination. A newline is not automatically 
 * added to the end of the message string.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>4</td>
 * <td>
 * message is sent directly to the SAPI logging
 * handler.
 * </td>
 * </tr>
 * </table>
 * </table>
 * </p>
 * @param string $destination [optional] The destination. Its meaning depends on the 
 * message_type parameter as described above.
 * @param string $extra_headers [optional] The extra headers. It's used when the message_type
 * parameter is set to 1.
 * This message type uses the same internal function as 
 * mail does.
 * @return bool true on success or false on failure
 */
function error_log (string $message, int $message_type = null, string $destination = null, string $extra_headers = null) {}

/**
 * Get the last occurred error
 * @link http://www.php.net/manual/en/function.error-get-last.php
 * @return array an associative array describing the last error with keys "type",
 * "message", "file" and "line". If the error has been caused by a PHP
 * internal function then the "message" begins with its name.
 * Returns null if there hasn't been an error yet.
 */
function error_get_last () {}

/**
 * Clear the most recent error
 * @link http://www.php.net/manual/en/function.error-clear-last.php
 * @return void Clears the most recent errors, making it unable to be retrieved with
 * error_get_last.
 */
function error_clear_last () {}

/**
 * Call the callback given by the first parameter
 * @link http://www.php.net/manual/en/function.call-user-func.php
 * @param callable $callback The callable to be called.
 * @param mixed $parameter [optional] <p>
 * Zero or more parameters to be passed to the callback.
 * </p>
 * <p>
 * Note that the parameters for call_user_func are
 * not passed by reference.
 * call_user_func example and references
 * <pre>
 * <code>&lt;?php
 * error_reporting(E_ALL);
 * function increment(&amp;$var)
 * {
 * $var++;
 * }
 * $a = 0;
 * call_user_func('increment', $a);
 * echo $a.&quot;\n&quot;;
 * &#47;&#47; You can use this instead
 * call_user_func_array('increment', array(&amp;$a));
 * echo $a.&quot;\n&quot;;
 * ?&gt;</code>
 * </pre>
 * <p>The above example will output:</p>
 * <pre>
 * Warning: Parameter 1 to increment() expected to be a reference, value given in ???
 * 0
 * 1
 * </pre>
 * </p>
 * @param mixed $_ [optional] 
 * @return mixed the return value of the callback.
 */
function call_user_func (callable $callback, $parameter = null, $_ = null) {}

/**
 * Call a callback with an array of parameters
 * @link http://www.php.net/manual/en/function.call-user-func-array.php
 * @param callable $callback The callable to be called.
 * @param array $param_arr The parameters to be passed to the callback, as an indexed array.
 * @return mixed the return value of the callback, or false on error.
 */
function call_user_func_array (callable $callback, array $param_arr) {}

/**
 * Call a static method
 * @link http://www.php.net/manual/en/function.forward-static-call.php
 * @param callable $function The function or method to be called. This parameter may be an array,
 * with the name of the class, and the method, or a string, with a function
 * name.
 * @param mixed $parameter [optional] Zero or more parameters to be passed to the function.
 * @param mixed $_ [optional] 
 * @return mixed the function result, or false on error.
 */
function forward_static_call (callable $function, $parameter = null, $_ = null) {}

/**
 * Call a static method and pass the arguments as array
 * @link http://www.php.net/manual/en/function.forward-static-call-array.php
 * @param callable $function The function or method to be called. This parameter may be an array,
 * with the name of the class, and the method, or a string, with a function
 * name.
 * @param array $parameters 
 * @return mixed the function result, or false on error.
 */
function forward_static_call_array (callable $function, array $parameters) {}

/**
 * Generates a storable representation of a value
 * @link http://www.php.net/manual/en/function.serialize.php
 * @param mixed $value <p>
 * The value to be serialized. serialize
 * handles all types, except the resource-type.
 * You can even serialize arrays that contain
 * references to itself. Circular references inside the array/object you 
 * are serializing will also be stored. Any other 
 * reference will be lost.
 * </p>
 * <p>
 * When serializing objects, PHP will attempt to call the member function
 * __sleep() prior to serialization. 
 * This is to allow the object to do any last minute clean-up, etc. prior 
 * to being serialized. Likewise, when the object is restored using 
 * unserialize the __wakeup() member function is called.
 * </p>
 * <p>
 * Object's private members have the class name prepended to the member
 * name; protected members have a '&#42;' prepended to the member name.
 * These prepended values have null bytes on either side.
 * </p>
 * @return string a string containing a byte-stream representation of 
 * value that can be stored anywhere.
 * <p>
 * Note that this is a binary string which may include null bytes, and needs
 * to be stored and handled as such. For example,
 * serialize output should generally be stored in a BLOB
 * field in a database, rather than a CHAR or TEXT field.
 * </p>
 */
function serialize ($value) {}

/**
 * Creates a PHP value from a stored representation
 * @link http://www.php.net/manual/en/function.unserialize.php
 * @param string $str <p>
 * The serialized string.
 * </p>
 * <p>
 * If the variable being unserialized is an object, after successfully 
 * reconstructing the object PHP will automatically attempt to call the
 * __wakeup() member
 * function (if it exists).
 * </p>
 * <p>
 * unserialize_callback_func directive
 * <p>
 * It's possible to set a callback-function which will be called,
 * if an undefined class should be instantiated during unserializing.
 * (to prevent getting an incomplete object "__PHP_Incomplete_Class".)
 * Use your php.ini, ini_set or htaccess 
 * to define unserialize_callback_func.
 * Everytime an undefined class should be instantiated, it'll be called. To disable this feature just
 * empty this setting.
 * </p>
 * </p>
 * @param array $options [optional] <p>
 * Any options to be provided to unserialize, as an
 * associative array.
 * </p>
 * <table>
 * Valid options
 * <table>
 * <tr valign="top">
 * <td>Name</td>
 * <td>Type</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>allowed_classes</td>
 * <td>mixed</td>
 * <td>
 * Either an array of class names which should be
 * accepted, false to accept no classes, or true to accept all
 * classes. If this option is defined and
 * unserialize encounters an object of a class
 * that isn't to be accepted, then the object will be instantiated as
 * __PHP_Incomplete_Class instead.
 * Omitting this option is the same as defining it as true: PHP
 * will attempt to instantiate objects of any class.
 * </td>
 * </tr>
 * </table>
 * </table>
 * @return mixed The converted value is returned, and can be a boolean,
 * integer, float, string,
 * array or object.
 * <p>
 * In case the passed string is not unserializeable, false is returned and
 * E_NOTICE is issued.
 * </p>
 */
function unserialize (string $str, array $options = null) {}

/**
 * Dumps information about a variable
 * @link http://www.php.net/manual/en/function.var-dump.php
 * @param mixed $expression The variable you want to dump.
 * @param mixed $_ [optional] 
 * @return void 
 */
function var_dump ($expression, $_ = null) {}

/**
 * Outputs or returns a parsable string representation of a variable
 * @link http://www.php.net/manual/en/function.var-export.php
 * @param mixed $expression The variable you want to export.
 * @param bool $return [optional] If used and set to true, var_export will return
 * the variable representation instead of outputting it.
 * @return mixed the variable representation when the return 
 * parameter is used and evaluates to true. Otherwise, this function will
 * return null.
 */
function var_export ($expression, bool $return = null) {}

/**
 * Dumps a string representation of an internal zend value to output
 * @link http://www.php.net/manual/en/function.debug-zval-dump.php
 * @param mixed $variable The variable being evaluated.
 * @param mixed $_ [optional] 
 * @return void 
 */
function debug_zval_dump ($variable, $_ = null) {}

/**
 * Prints human-readable information about a variable
 * @link http://www.php.net/manual/en/function.print-r.php
 * @param mixed $expression The expression to be printed.
 * @param bool $return [optional] If you would like to capture the output of print_r, 
 * use the return parameter. When this parameter is set
 * to true, print_r will return the information rather than print it.
 * @return mixed If given a string, integer or float,
 * the value itself will be printed. If given an array, values
 * will be presented in a format that shows keys and elements. Similar
 * notation is used for objects.
 * <p>
 * When the return parameter is true, this function
 * will return a string. Otherwise, the return value is true.
 * </p>
 */
function print_r ($expression, bool $return = null) {}

/**
 * Returns the amount of memory allocated to PHP
 * @link http://www.php.net/manual/en/function.memory-get-usage.php
 * @param bool $real_usage [optional] Set this to true to get total memory allocated from
 * system, including unused pages. 
 * If not set or false only the used memory is reported.
 * @return int the memory amount in bytes.
 */
function memory_get_usage (bool $real_usage = null) {}

/**
 * Returns the peak of memory allocated by PHP
 * @link http://www.php.net/manual/en/function.memory-get-peak-usage.php
 * @param bool $real_usage [optional] Set this to true to get the real size of memory allocated from
 * system. If not set or false only the memory used by
 * emalloc() is reported.
 * @return int the memory peak in bytes.
 */
function memory_get_peak_usage (bool $real_usage = null) {}

/**
 * Register a function for execution on shutdown
 * @link http://www.php.net/manual/en/function.register-shutdown-function.php
 * @param callable $callback <p>
 * The shutdown callback to register.
 * </p>
 * <p>
 * The shutdown callbacks are executed as the part of the request, so
 * it's possible to send output from them and access output buffers.
 * </p>
 * @param mixed $parameter [optional] It is possible to pass parameters to the shutdown function by passing
 * additional parameters.
 * @param mixed $_ [optional] 
 * @return void 
 */
function register_shutdown_function (callable $callback, $parameter = null, $_ = null) {}

/**
 * Register a function for execution on each tick
 * @link http://www.php.net/manual/en/function.register-tick-function.php
 * @param callable $function The function name as a string, or an array consisting of an object and
 * a method.
 * @param mixed $arg [optional] 
 * @param mixed $_ [optional] 
 * @return bool true on success or false on failure
 */
function register_tick_function (callable $function, $arg = null, $_ = null) {}

/**
 * De-register a function for execution on each tick
 * @link http://www.php.net/manual/en/function.unregister-tick-function.php
 * @param string $function_name The function name, as a string.
 * @return void 
 */
function unregister_tick_function (string $function_name) {}

/**
 * Syntax highlighting of a file
 * @link http://www.php.net/manual/en/function.highlight-file.php
 * @param string $filename Path to the PHP file to be highlighted.
 * @param bool $return [optional] Set this parameter to true to make this function return the
 * highlighted code.
 * @return mixed If return is set to true, returns the highlighted
 * code as a string instead of printing it out. Otherwise, it will return
 * true on success, false on failure.
 */
function highlight_file (string $filename, bool $return = null) {}

/**
 * Alias: highlight_file
 * @link http://www.php.net/manual/en/function.show-source.php
 * @param mixed $file_name
 * @param mixed $return [optional]
 */
function show_source ($file_name, $return = null) {}

/**
 * Syntax highlighting of a string
 * @link http://www.php.net/manual/en/function.highlight-string.php
 * @param string $str The PHP code to be highlighted. This should include the opening tag.
 * @param bool $return [optional] Set this parameter to true to make this function return the
 * highlighted code.
 * @return mixed If return is set to true, returns the highlighted
 * code as a string instead of printing it out. Otherwise, it will return
 * true on success, false on failure.
 */
function highlight_string (string $str, bool $return = null) {}

/**
 * Return source with stripped comments and whitespace
 * @link http://www.php.net/manual/en/function.php-strip-whitespace.php
 * @param string $filename Path to the PHP file.
 * @return string The stripped source code will be returned on success, or an empty string
 * on failure.
 * <p>
 * This function respects the value of the
 * short_open_tag
 * ini directive.
 * </p>
 * <p>
 * This function works as described as of PHP 5.0.1. Before this it would
 * only return an empty string. For more information on this bug and its
 * prior behavior, see bug report
 * #29606.
 * </p>
 */
function php_strip_whitespace (string $filename) {}

/**
 * Gets the value of a configuration option
 * @link http://www.php.net/manual/en/function.ini-get.php
 * @param string $varname The configuration option name.
 * @return string the value of the configuration option as a string on success, or an
 * empty string for null values. Returns false if the
 * configuration option doesn't exist.
 */
function ini_get (string $varname) {}

/**
 * Gets all configuration options
 * @link http://www.php.net/manual/en/function.ini-get-all.php
 * @param string $extension [optional] An optional extension name. If set, the function return only options
 * specific for that extension.
 * @param bool $details [optional] Retrieve details settings or only the current value for each setting.
 * Default is true (retrieve details).
 * @return array an associative array with directive name as the array key.
 * <p>
 * When details is true (default) the array will
 * contain global_value (set in
 * php.ini), local_value (perhaps set with
 * ini_set or htaccess), and
 * access (the access level).
 * </p>
 * <p>
 * When details is false the value will be the
 * current value of the option.
 * </p>
 * <p>
 * See the manual section
 * for information on what access levels mean.
 * </p>
 * <p>
 * It's possible for a directive to have multiple access levels, which is
 * why access shows the appropriate bitmask values.
 * </p>
 */
function ini_get_all (string $extension = null, bool $details = null) {}

/**
 * Sets the value of a configuration option
 * @link http://www.php.net/manual/en/function.ini-set.php
 * @param string $varname <p>
 * </p>
 * <p>
 * Not all the available options can be changed using
 * <p>appendix.
 * </p>
 * @param string $newvalue The new value for the option.
 * @return string the old value on success, false on failure.
 */
function ini_set (string $varname, string $newvalue) {}

/**
 * Alias: ini_set
 * @link http://www.php.net/manual/en/function.ini-alter.php
 * @param mixed $varname
 * @param mixed $newvalue
 */
function ini_alter ($varname, $newvalue) {}

/**
 * Restores the value of a configuration option
 * @link http://www.php.net/manual/en/function.ini-restore.php
 * @param string $varname The configuration option name.
 * @return void 
 */
function ini_restore (string $varname) {}

/**
 * Gets the current include_path configuration option
 * @link http://www.php.net/manual/en/function.get-include-path.php
 * @return string the path, as a string.
 */
function get_include_path () {}

/**
 * Sets the include_path configuration option
 * @link http://www.php.net/manual/en/function.set-include-path.php
 * @param string $new_include_path The new value for the include_path
 * @return string the old include_path on
 * success or false on failure.
 */
function set_include_path (string $new_include_path) {}

/**
 * Restores the value of the include_path configuration option
 * @link http://www.php.net/manual/en/function.restore-include-path.php
 * @return void 
 */
function restore_include_path () {}

/**
 * Send a cookie
 * @link http://www.php.net/manual/en/function.setcookie.php
 * @param string $name The name of the cookie.
 * @param string $value [optional] The value of the cookie. This value is stored on the clients computer;
 * do not store sensitive information. Assuming the
 * name is 'cookiename', this
 * value is retrieved through $_COOKIE['cookiename']
 * @param int $expires [optional] <p>
 * The time the cookie expires. This is a Unix timestamp so is
 * in number of seconds since the epoch. In other words, you'll
 * most likely set this with the time function
 * plus the number of seconds before you want it to expire. Or
 * you might use mktime.
 * time()+60&#42;60&#42;24&#42;30 will set the cookie to
 * expire in 30 days. If set to 0, or omitted, the cookie will expire at
 * the end of the session (when the browser closes).
 * </p>
 * <p>
 * <p>
 * You may notice the expires parameter takes on a
 * Unix timestamp, as opposed to the date format Wdy, DD-Mon-YYYY
 * HH:MM:SS GMT, this is because PHP does this conversion
 * internally.
 * </p>
 * </p>
 * @param string $path [optional] The path on the server in which the cookie will be available on.
 * If set to '/', the cookie will be available
 * within the entire domain. If set to
 * '/foo/', the cookie will only be available
 * within the /foo/ directory and all
 * sub-directories such as /foo/bar/ of
 * domain. The default value is the
 * current directory that the cookie is being set in.
 * @param string $domain [optional] <p>
 * The (sub)domain that the cookie is available to. Setting this to a
 * subdomain (such as 'www.example.com') will make the
 * cookie available to that subdomain and all other sub-domains of it (i.e.
 * w2.www.example.com). To make the cookie available to the whole domain
 * (including all subdomains of it), simply set the value to the domain
 * name ('example.com', in this case).
 * </p>
 * <p>
 * Older browsers still implementing the deprecated
 * RFC 2109 may require a leading
 * . to match all subdomains.
 * </p>
 * @param bool $secure [optional] Indicates that the cookie should only be transmitted over a
 * secure HTTPS connection from the client. When set to true, the
 * cookie will only be set if a secure connection exists.
 * On the server-side, it's on the programmer to send this
 * kind of cookie only on secure connection (e.g. with respect to
 * $_SERVER["HTTPS"]).
 * @param bool $httponly [optional] When true the cookie will be made accessible only through the HTTP
 * protocol. This means that the cookie won't be accessible by
 * scripting languages, such as JavaScript. It has been suggested that
 * this setting can effectively help to reduce identity theft through
 * XSS attacks (although it is not supported by all browsers), but that
 * claim is often disputed. Added in PHP 5.2.0.
 * true or false
 * @return bool If output exists prior to calling this function,
 * setcookie will fail and return false. If
 * setcookie successfully runs, it will return true.
 * This does not indicate whether the user accepted the cookie.
 */
function setcookie (string $name, string $value = null, int $expires = null, string $path = null, string $domain = null, bool $secure = null, bool $httponly = null) {}

/**
 * Send a cookie without urlencoding the cookie value
 * @link http://www.php.net/manual/en/function.setrawcookie.php
 * @param string $name 
 * @param string $value [optional] 
 * @param int $expires [optional] 
 * @param string $path [optional] 
 * @param string $domain [optional] 
 * @param bool $secure [optional] 
 * @param bool $httponly [optional] 
 * @return bool true on success or false on failure
 */
function setrawcookie (string $name, string $value = null, int $expires = null, string $path = null, string $domain = null, bool $secure = null, bool $httponly = null) {}

/**
 * Send a raw HTTP header
 * @link http://www.php.net/manual/en/function.header.php
 * @param string $header <p>
 * The header string.
 * </p>
 * <p>
 * There are two special-case header calls. The first is a header
 * that starts with the string "HTTP/" (case is not
 * significant), which will be used to figure out the HTTP status
 * code to send. For example, if you have configured Apache to
 * use a PHP script to handle requests for missing files (using
 * the ErrorDocument directive), you may want to
 * make sure that your script generates the proper status code.
 * </p>
 * <p>
 * <pre>
 * <code>&lt;?php
 * header(&quot;HTTP&#47;1.0 404 Not Found&quot;);
 * ?&gt;</code>
 * </pre>
 * </p>
 * <p>
 * The second special case is the "Location:" header. Not only does
 * it send this header back to the browser, but it also returns a
 * REDIRECT (302) status code to the browser
 * unless the 201 or
 * a 3xx status code has already been set.
 * </p>
 * <p>
 * <pre>
 * <code>&lt;?php
 * header(&quot;Location: http:&#47;&#47;www.example.com&#47;&quot;); &#47;&#42; Redirect browser &#42;&#47;
 * &#47;&#42; Make sure that code below does not get executed when we redirect. &#42;&#47;
 * exit;
 * ?&gt;</code>
 * </pre>
 * </p>
 * @param bool $replace [optional] <p>
 * The optional replace parameter indicates
 * whether the header should replace a previous similar header, or
 * add a second header of the same type. By default it will replace,
 * but if you pass in false as the second argument you can force
 * multiple headers of the same type. For example:
 * </p>
 * <p>
 * <pre>
 * <code>&lt;?php
 * header('WWW-Authenticate: Negotiate');
 * header('WWW-Authenticate: NTLM', false);
 * ?&gt;</code>
 * </pre>
 * </p>
 * @param int $http_response_code [optional] Forces the HTTP response code to the specified value. Note that this 
 * parameter only has an effect if the header is 
 * not empty.
 * @return void 
 */
function header (string $header, bool $replace = null, int $http_response_code = null) {}

/**
 * Remove previously set headers
 * @link http://www.php.net/manual/en/function.header-remove.php
 * @param string $name [optional] <p>
 * The header name to be removed.
 * </p>
 * This parameter is case-insensitive.
 * @return void 
 */
function header_remove (string $name = null) {}

/**
 * Checks if or where headers have been sent
 * @link http://www.php.net/manual/en/function.headers-sent.php
 * @param string $file [optional] If the optional file and
 * line parameters are set, 
 * headers_sent will put the PHP source file name
 * and line number where output started in the file
 * and line variables.
 * @param int $line [optional] The line number where the output started.
 * @return bool headers_sent will return false if no HTTP headers
 * have already been sent or true otherwise.
 */
function headers_sent (string &$file = null, int &$line = null) {}

/**
 * Returns a list of response headers sent (or ready to send)
 * @link http://www.php.net/manual/en/function.headers-list.php
 * @return array a numerically indexed array of headers.
 */
function headers_list () {}

/**
 * Get or Set the HTTP response code
 * @link http://www.php.net/manual/en/function.http-response-code.php
 * @param int $response_code [optional] The optional response_code will set the response code.
 * @return mixed If response_code is provided, then the previous
 * status code will be returned. If response_code is not
 * provided, then the current status code will be returned. Both of these
 * values will default to a 200 status code if used in a web
 * server environment.
 * <p>
 * false will be returned if response_code is not
 * provided and it is not invoked in a web server environment (such as from a
 * CLI application). true will be returned if
 * response_code is provided and it is not invoked in a
 * web server environment (but only when no previous response status has been
 * set).
 * </p>
 */
function http_response_code (int $response_code = null) {}

/**
 * Check whether client disconnected
 * @link http://www.php.net/manual/en/function.connection-aborted.php
 * @return int 1 if client disconnected, 0 otherwise.
 */
function connection_aborted () {}

/**
 * Returns connection status bitfield
 * @link http://www.php.net/manual/en/function.connection-status.php
 * @return int the connection status bitfield, which can be used against the
 * CONNECTION_XXX constants to determine the connection
 * status.
 */
function connection_status () {}

/**
 * Set whether a client disconnect should abort script execution
 * @link http://www.php.net/manual/en/function.ignore-user-abort.php
 * @param bool $value [optional] If set, this function will set the ignore_user_abort ini setting
 * to the given value. If not, this function will
 * only return the previous setting without changing it.
 * @return int the previous setting, as an integer.
 */
function ignore_user_abort (bool $value = null) {}

/**
 * Parse a configuration file
 * @link http://www.php.net/manual/en/function.parse-ini-file.php
 * @param string $filename The filename of the ini file being parsed.
 * @param bool $process_sections [optional] By setting the process_sections
 * parameter to true, you get a multidimensional array, with
 * the section names and settings included. The default
 * for process_sections is false
 * @param int $scanner_mode [optional] <p>
 * Can either be INI_SCANNER_NORMAL (default) or 
 * INI_SCANNER_RAW. If INI_SCANNER_RAW 
 * is supplied, then option values will not be parsed.
 * </p>
 * ini.scanner.typed
 * @return array The settings are returned as an associative array on success,
 * and false on failure.
 */
function parse_ini_file (string $filename, bool $process_sections = null, int $scanner_mode = null) {}

/**
 * Parse a configuration string
 * @link http://www.php.net/manual/en/function.parse-ini-string.php
 * @param string $ini The contents of the ini file being parsed.
 * @param bool $process_sections [optional] By setting the process_sections
 * parameter to true, you get a multidimensional array, with
 * the section names and settings included. The default
 * for process_sections is false
 * @param int $scanner_mode [optional] <p>
 * Can either be INI_SCANNER_NORMAL (default) or 
 * INI_SCANNER_RAW. If INI_SCANNER_RAW 
 * is supplied, then option values will not be parsed.
 * </p>
 * ini.scanner.typed
 * @return array The settings are returned as an associative array on success,
 * and false on failure.
 */
function parse_ini_string (string $ini, bool $process_sections = null, int $scanner_mode = null) {}

/**
 * Tells whether the file was uploaded via HTTP POST
 * @link http://www.php.net/manual/en/function.is-uploaded-file.php
 * @param string $filename The filename being checked.
 * @return bool true on success or false on failure
 */
function is_uploaded_file (string $filename) {}

/**
 * Moves an uploaded file to a new location
 * @link http://www.php.net/manual/en/function.move-uploaded-file.php
 * @param string $filename The filename of the uploaded file.
 * @param string $destination The destination of the moved file.
 * @return bool true on success.
 * <p>
 * If filename is not a valid upload file,
 * then no action will occur, and
 * move_uploaded_file will return
 * false.
 * </p>
 * <p>
 * If filename is a valid upload file, but
 * cannot be moved for some reason, no action will occur, and
 * move_uploaded_file will return
 * false. Additionally, a warning will be issued.
 * </p>
 */
function move_uploaded_file (string $filename, string $destination) {}

/**
 * Get the Internet host name corresponding to a given IP address
 * @link http://www.php.net/manual/en/function.gethostbyaddr.php
 * @param string $ip_address The host IP address.
 * @return string the host name on success, the unmodified ip_address
 * on failure, or false on malformed input.
 */
function gethostbyaddr (string $ip_address) {}

/**
 * Get the IPv4 address corresponding to a given Internet host name
 * @link http://www.php.net/manual/en/function.gethostbyname.php
 * @param string $hostname The host name.
 * @return string the IPv4 address or a string containing the unmodified
 * hostname on failure.
 */
function gethostbyname (string $hostname) {}

/**
 * Get a list of IPv4 addresses corresponding to a given Internet host
 * name
 * @link http://www.php.net/manual/en/function.gethostbynamel.php
 * @param string $hostname The host name.
 * @return array an array of IPv4 addresses or false if
 * hostname could not be resolved.
 */
function gethostbynamel (string $hostname) {}

/**
 * Gets the host name
 * @link http://www.php.net/manual/en/function.gethostname.php
 * @return string a string with the hostname on success, otherwise false is 
 * returned.
 */
function gethostname () {}

function net_get_interfaces () {}

/**
 * Alias: checkdnsrr
 * @link http://www.php.net/manual/en/function.dns-check-record.php
 * @param mixed $host
 * @param mixed $type [optional]
 */
function dns_check_record ($host, $type = null) {}

/**
 * Check DNS records corresponding to a given Internet host name or IP address
 * @link http://www.php.net/manual/en/function.checkdnsrr.php
 * @param string $host host may either be the IP address in
 * dotted-quad notation or the host name.
 * @param string $type [optional] type may be any one of: A, MX, NS, SOA,
 * PTR, CNAME, AAAA, A6, SRV, NAPTR, TXT or ANY.
 * @return bool true if any records are found; returns false if no records
 * were found or if an error occurred.
 */
function checkdnsrr (string $host, string $type = null) {}

/**
 * Alias: getmxrr
 * @link http://www.php.net/manual/en/function.dns-get-mx.php
 * @param mixed $hostname
 * @param mixed $mxhosts
 * @param mixed $weight [optional]
 */
function dns_get_mx ($hostname, &$mxhosts, &$weight = null) {}

/**
 * Get MX records corresponding to a given Internet host name
 * @link http://www.php.net/manual/en/function.getmxrr.php
 * @param string $hostname The Internet host name.
 * @param array $mxhosts A list of the MX records found is placed into the array
 * mxhosts.
 * @param array $weight [optional] If the weight array is given, it will be filled
 * with the weight information gathered.
 * @return bool true if any records are found; returns false if no records
 * were found or if an error occurred.
 */
function getmxrr (string $hostname, array &$mxhosts, array &$weight = null) {}

/**
 * Fetch DNS Resource Records associated with a hostname
 * @link http://www.php.net/manual/en/function.dns-get-record.php
 * @param string $hostname <p>
 * hostname should be a valid DNS hostname such
 * as "www.example.com". Reverse lookups can be generated
 * using in-addr.arpa notation, but
 * gethostbyaddr is more suitable for
 * the majority of reverse lookups.
 * </p>
 * <p>
 * Per DNS standards, email addresses are given in user.host format (for
 * example: hostmaster.example.com as opposed to hostmaster@example.com),
 * be sure to check this value and modify if necessary before using it
 * with a functions such as mail.
 * </p>
 * @param int $type [optional] <p>
 * By default, dns_get_record will search for any
 * resource records associated with hostname. 
 * To limit the query, specify the optional type
 * parameter. May be any one of the following:
 * DNS_A, DNS_CNAME,
 * DNS_HINFO, DNS_CAA,
 * DNS_MX, DNS_NS,
 * DNS_PTR, DNS_SOA,
 * DNS_TXT, DNS_AAAA,
 * DNS_SRV, DNS_NAPTR,
 * DNS_A6, DNS_ALL
 * or DNS_ANY.
 * </p>
 * <p>
 * Because of eccentricities in the performance of libresolv
 * between platforms, DNS_ANY will not
 * always return every record, the slower DNS_ALL
 * will collect all records more reliably.
 * </p>
 * @param array $authns [optional] Passed by reference and, if given, will be populated with Resource
 * Records for the Authoritative Name Servers.
 * @param array $addtl [optional] Passed by reference and, if given, will be populated with any
 * Additional Records.
 * @param bool $raw [optional] In case of raw mode, we query only the requested type instead of looping
 * type by type before going with the additional info stuff.
 * @return array This function returns an array of associative arrays,
 * or false on failure. Each associative array contains
 * at minimum the following keys:
 * <table>
 * Basic DNS attributes
 * <table>
 * <tr valign="top">
 * <td>Attribute</td>
 * <td>Meaning</td>
 * </tr>
 * <tr valign="top">
 * <td>host</td>
 * <td>
 * The record in the DNS namespace to which the rest of the associated data refers.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>class</td>
 * <td>
 * dns_get_record only returns Internet class records and as
 * such this parameter will always return IN.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>type</td>
 * <td>
 * String containing the record type. Additional attributes will also be contained
 * in the resulting array dependant on the value of type. See table below.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>ttl</td>
 * <td>
 * "Time To Live" remaining for this record. This will not equal
 * the record's original ttl, but will rather equal the original ttl minus whatever
 * length of time has passed since the authoritative name server was queried.
 * </td>
 * </tr>
 * </table>
 * </table>
 * <p>
 * <table>
 * Other keys in associative arrays dependant on 'type'
 * <table>
 * <tr valign="top">
 * <td>Type</td>
 * <td>Extra Columns</td>
 * </tr>
 * <tr valign="top">
 * <td>A</td>
 * <td>
 * ip: An IPv4 addresses in dotted decimal notation.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>MX</td>
 * <td>
 * pri: Priority of mail exchanger.
 * Lower numbers indicate greater priority.
 * target: FQDN of the mail exchanger.
 * See also dns_get_mx.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>CNAME</td>
 * <td>
 * target: FQDN of location in DNS namespace to which
 * the record is aliased.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>NS</td>
 * <td>
 * target: FQDN of the name server which is authoritative
 * for this hostname.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>PTR</td>
 * <td>
 * target: Location within the DNS namespace to which
 * this record points.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>TXT</td>
 * <td>
 * txt: Arbitrary string data associated with this record.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>HINFO</td>
 * <td>
 * cpu: IANA number designating the CPU of the machine
 * referenced by this record.
 * os: IANA number designating the Operating System on
 * the machine referenced by this record.
 * See IANA's Operating System
 * Names for the meaning of these values.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>CAA</td>
 * <td>
 * flags: A one-byte bitfield; currently only bit 0 is defined,
 * meaning 'critical'; other bits are reserved and should be ignored.
 * tag: The CAA tag name (alphanumeric ASCII string).
 * value: The CAA tag value (binary string, may use subformats).
 * For additional information see: RFC 6844
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>SOA</td>
 * <td>
 * mname: FQDN of the machine from which the resource
 * records originated.
 * rname: Email address of the administrative contact
 * for this domain.
 * serial: Serial # of this revision of the requested
 * domain.
 * refresh: Refresh interval (seconds) secondary name
 * servers should use when updating remote copies of this domain.
 * retry: Length of time (seconds) to wait after a
 * failed refresh before making a second attempt.
 * expire: Maximum length of time (seconds) a secondary
 * DNS server should retain remote copies of the zone data without a
 * successful refresh before discarding.
 * minimum-ttl: Minimum length of time (seconds) a
 * client can continue to use a DNS resolution before it should request
 * a new resolution from the server. Can be overridden by individual
 * resource records.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>AAAA</td>
 * <td>
 * ipv6: IPv6 address
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>A6(PHP &gt;= 5.1.0)</td>
 * <td>
 * masklen: Length (in bits) to inherit from the target
 * specified by chain.
 * ipv6: Address for this specific record to merge with
 * chain.
 * chain: Parent record to merge with
 * ipv6 data.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>SRV</td>
 * <td>
 * pri: (Priority) lowest priorities should be used first.
 * weight: Ranking to weight which of commonly prioritized
 * targets should be chosen at random.
 * target and port: hostname and port
 * where the requested service can be found.
 * For additional information see: RFC 2782
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>NAPTR</td>
 * <td>
 * order and pref: Equivalent to
 * pri and weight above.
 * flags, services, regex,
 * and replacement: Parameters as defined by
 * RFC 2915.
 * </td>
 * </tr>
 * </table>
 * </table>
 * </p>
 */
function dns_get_record (string $hostname, int $type = null, array &$authns = null, array &$addtl = null, bool $raw = null) {}

/**
 * Get the integer value of a variable
 * @link http://www.php.net/manual/en/function.intval.php
 * @param mixed $var The scalar value being converted to an integer
 * @param int $base [optional] <p>
 * The base for the conversion
 * </p>
 * <p>
 * If base is 0, the base used is determined
 * by the format of var:
 * <p>
 * <br>
 * if string includes a "0x" (or "0X") prefix, the base is taken
 * as 16 (hex); otherwise,
 * <br>
 * if string starts with "0", the base is taken as 8 (octal);
 * otherwise,
 * <br>
 * the base is taken as 10 (decimal).
 * </p>
 * </p>
 * @return int The integer value of var on success, or 0 on
 * failure. Empty arrays return 0, non-empty arrays return 1.
 * <p>
 * The maximum value depends on the system. 32 bit systems have a 
 * maximum signed integer range of -2147483648 to 2147483647. So for example 
 * on such a system, intval('1000000000000') will return 
 * 2147483647. The maximum signed integer value for 64 bit systems is 
 * 9223372036854775807.
 * </p>
 * <p>
 * Strings will most likely return 0 although this depends on the 
 * leftmost characters of the string. The common rules of 
 * integer casting 
 * apply.
 * </p>
 */
function intval ($var, int $base = null) {}

/**
 * Get float value of a variable
 * @link http://www.php.net/manual/en/function.floatval.php
 * @param mixed $var May be any scalar type. floatval should not be used
 * on objects, as doing so will emit an E_NOTICE level
 * error and return 1.
 * @return float The float value of the given variable. Empty arrays return 0, non-empty
 * arrays return 1.
 * <p>
 * Strings will most likely return 0 although this depends on the 
 * leftmost characters of the string. The common rules of 
 * float casting 
 * apply.
 * </p>
 */
function floatval ($var) {}

/**
 * Alias: floatval
 * @link http://www.php.net/manual/en/function.doubleval.php
 * @param mixed $var
 */
function doubleval ($var) {}

/**
 * Get string value of a variable
 * @link http://www.php.net/manual/en/function.strval.php
 * @param mixed $var <p>
 * The variable that is being converted to a string.
 * </p>
 * <p>
 * var may be any scalar type or an object that
 * implements the __toString()
 * method. You cannot use strval on arrays or on
 * objects that do not implement the
 * __toString() method.
 * </p>
 * @return string The string value of var.
 */
function strval ($var) {}

/**
 * Get the boolean value of a variable
 * @link http://www.php.net/manual/en/function.boolval.php
 * @param mixed $var The scalar value being converted to a boolean.
 * @return bool The boolean value of var.
 */
function boolval ($var) {}

/**
 * Get the type of a variable
 * @link http://www.php.net/manual/en/function.gettype.php
 * @param mixed $var The variable being type checked.
 * @return string Possible values for the returned string are:
 * <p>
 * <br>
 * "boolean"
 * <br>
 * "integer"
 * <br>
 * "double" (for historical reasons "double" is
 * returned in case of a float, and not simply
 * "float")
 * <br>
 * "string"
 * <br>
 * "array"
 * <br>
 * "object"
 * <br>
 * "resource"
 * <br>
 * "resource (closed)" as of PHP 7.2.0
 * <br>
 * "NULL"
 * <br>
 * "unknown type"
 * </p>
 */
function gettype ($var) {}

/**
 * Set the type of a variable
 * @link http://www.php.net/manual/en/function.settype.php
 * @param mixed $var The variable being converted.
 * @param string $type <p>
 * Possibles values of type are:
 * <p>
 * <br>
 * "boolean" or "bool"
 * <br>
 * "integer" or "int"
 * <br>
 * "float" or "double"
 * <br>
 * "string"
 * <br>
 * "array"
 * <br>
 * "object"
 * <br>
 * "null"
 * </p>
 * </p>
 * @return bool true on success or false on failure
 */
function settype (&$var, string $type) {}

/**
 * Finds whether a variable is null
 * @link http://www.php.net/manual/en/function.is-null.php
 * @param mixed $var The variable being evaluated.
 * @return bool true if var is null, false
 * otherwise.
 */
function is_null ($var) {}

/**
 * Finds whether a variable is a resource
 * @link http://www.php.net/manual/en/function.is-resource.php
 * @param mixed $var The variable being evaluated.
 * @return bool true if var is a resource,
 * false otherwise.
 */
function is_resource ($var) {}

/**
 * Finds out whether a variable is a boolean
 * @link http://www.php.net/manual/en/function.is-bool.php
 * @param mixed $var The variable being evaluated.
 * @return bool true if var is a boolean,
 * false otherwise.
 */
function is_bool ($var) {}

/**
 * Find whether the type of a variable is integer
 * @link http://www.php.net/manual/en/function.is-int.php
 * @param mixed $var The variable being evaluated.
 * @return bool true if var is an integer,
 * false otherwise.
 */
function is_int ($var) {}

/**
 * Finds whether the type of a variable is float
 * @link http://www.php.net/manual/en/function.is-float.php
 * @param mixed $var The variable being evaluated.
 * @return bool true if var is a float,
 * false otherwise.
 */
function is_float ($var) {}

/**
 * Alias: is_int
 * @link http://www.php.net/manual/en/function.is-integer.php
 * @param mixed $var
 */
function is_integer ($var) {}

/**
 * Alias: is_int
 * @link http://www.php.net/manual/en/function.is-long.php
 * @param mixed $var
 */
function is_long ($var) {}

/**
 * Alias: is_float
 * @link http://www.php.net/manual/en/function.is-double.php
 * @param mixed $var
 */
function is_double ($var) {}

/**
 * Alias: is_float
 * @link http://www.php.net/manual/en/function.is-real.php
 * @param mixed $var
 */
function is_real ($var) {}

/**
 * Finds whether a variable is a number or a numeric string
 * @link http://www.php.net/manual/en/function.is-numeric.php
 * @param mixed $var The variable being evaluated.
 * @return bool true if var is a number or a numeric
 * string, false otherwise.
 */
function is_numeric ($var) {}

/**
 * Find whether the type of a variable is string
 * @link http://www.php.net/manual/en/function.is-string.php
 * @param mixed $var The variable being evaluated.
 * @return bool true if var is of type string,
 * false otherwise.
 */
function is_string ($var) {}

/**
 * Finds whether a variable is an array
 * @link http://www.php.net/manual/en/function.is-array.php
 * @param mixed $var The variable being evaluated.
 * @return bool true if var is an array,
 * false otherwise.
 */
function is_array ($var) {}

/**
 * Finds whether a variable is an object
 * @link http://www.php.net/manual/en/function.is-object.php
 * @param mixed $var The variable being evaluated.
 * @return bool true if var is an object,
 * false otherwise.
 */
function is_object ($var) {}

/**
 * Finds whether a variable is a scalar
 * @link http://www.php.net/manual/en/function.is-scalar.php
 * @param mixed $var The variable being evaluated.
 * @return bool true if var is a scalar, false
 * otherwise.
 */
function is_scalar ($var) {}

/**
 * Verify that the contents of a variable can be called as a function
 * @link http://www.php.net/manual/en/function.is-callable.php
 * @param mixed $var The value to check
 * @param bool $syntax_only [optional] If set to true the function only verifies that
 * name might be a function or method. It will only
 * reject simple variables that are not strings, or an array that does
 * not have a valid structure to be used as a callback. The valid ones
 * are supposed to have only 2 entries, the first of which is an object
 * or a string, and the second a string.
 * @param string $callable_name [optional] Receives the "callable name". In the example below it is
 * "someClass::someMethod". Note, however, that despite the implication
 * that someClass::SomeMethod() is a callable static method, this is not
 * the case.
 * @return bool true if var is callable, false 
 * otherwise.
 */
function is_callable ($var, bool $syntax_only = null, string &$callable_name = null) {}

/**
 * Verify that the contents of a variable is an iterable value
 * @link http://www.php.net/manual/en/function.is-iterable.php
 * @param mixed $var The value to check
 * @return bool true if var is iterable, false 
 * otherwise.
 */
function is_iterable ($var) {}

/**
 * Verify that the contents of a variable is a countable value
 * @link http://www.php.net/manual/en/function.is-countable.php
 * @param mixed $var The value to check
 * @return bool true if var is countable, false 
 * otherwise.
 */
function is_countable ($var) {}

/**
 * Closes process file pointer
 * @link http://www.php.net/manual/en/function.pclose.php
 * @param resource $handle The file pointer must be valid, and must have been returned by a
 * successful call to popen.
 * @return int the termination status of the process that was run. In case of 
 * an error then -1 is returned.
 */
function pclose ($handle) {}

/**
 * Opens process file pointer
 * @link http://www.php.net/manual/en/function.popen.php
 * @param string $command The command
 * @param string $mode The mode
 * @return resource a file pointer identical to that returned by
 * fopen, except that it is unidirectional (may
 * only be used for reading or writing) and must be closed with
 * pclose. This pointer may be used with
 * fgets, fgetss, and
 * fwrite. When the mode is 'r', the returned
 * file pointer equals to the STDOUT of the command, when the mode
 * is 'w', the returned file pointer equals to the STDIN of the
 * command.
 * <p>
 * If an error occurs, returns false.
 * </p>
 */
function popen (string $command, string $mode) {}

/**
 * Outputs a file
 * @link http://www.php.net/manual/en/function.readfile.php
 * @param string $filename The filename being read.
 * @param bool $use_include_path [optional] You can use the optional second parameter and set it to true, if
 * you want to search for the file in the include_path, too.
 * @param resource $context [optional] A context stream resource.
 * @return int the number of bytes read from the file. If an error
 * occurs, false is returned and unless the function was called as
 * @readfile, an error message is printed.
 */
function readfile (string $filename, bool $use_include_path = null, $context = null) {}

/**
 * Rewind the position of a file pointer
 * @link http://www.php.net/manual/en/function.rewind.php
 * @param resource $handle The file pointer must be valid, and must point to a file
 * successfully opened by fopen.
 * @return bool true on success or false on failure
 */
function rewind ($handle) {}

/**
 * Removes directory
 * @link http://www.php.net/manual/en/function.rmdir.php
 * @param string $dirname Path to the directory.
 * @param resource $context [optional] note.context-support
 * @return bool true on success or false on failure
 */
function rmdir (string $dirname, $context = null) {}

/**
 * Changes the current umask
 * @link http://www.php.net/manual/en/function.umask.php
 * @param int $mask [optional] The new umask.
 * @return int umask without arguments simply returns the
 * current umask otherwise the old umask is returned.
 */
function umask (int $mask = null) {}

/**
 * Closes an open file pointer
 * @link http://www.php.net/manual/en/function.fclose.php
 * @param resource $handle The file pointer must be valid, and must point to a file successfully
 * opened by fopen or fsockopen.
 * @return bool true on success or false on failure
 */
function fclose ($handle) {}

/**
 * Tests for end-of-file on a file pointer
 * @link http://www.php.net/manual/en/function.feof.php
 * @param resource $handle fs.validfp.all
 * @return bool true if the file pointer is at EOF or an error occurs
 * (including socket timeout); otherwise returns false.
 */
function feof ($handle) {}

/**
 * Gets character from file pointer
 * @link http://www.php.net/manual/en/function.fgetc.php
 * @param resource $handle fs.validfp.all
 * @return string a string containing a single character read from the file pointed
 * to by handle. Returns false on EOF.
 */
function fgetc ($handle) {}

/**
 * Gets line from file pointer
 * @link http://www.php.net/manual/en/function.fgets.php
 * @param resource $handle fs.validfp.all
 * @param int $length [optional] <p>
 * Reading ends when length - 1 bytes have been
 * read, or a newline (which is included in the return value), or an EOF
 * (whichever comes first). If no length is specified, it will keep
 * reading from the stream until it reaches the end of the line.
 * </p>
 * <p>
 * Until PHP 4.3.0, omitting it would assume 1024 as the line length.
 * If the majority of the lines in the file are all larger than 8KB,
 * it is more resource efficient for your script to specify the maximum
 * line length.
 * </p>
 * @return string a string of up to length - 1 bytes read from
 * the file pointed to by handle. If there is no more data 
 * to read in the file pointer, then false is returned.
 * <p>
 * If an error occurs, false is returned.
 * </p>
 */
function fgets ($handle, int $length = null) {}

/**
 * Gets line from file pointer and strip HTML tags
 * @link http://www.php.net/manual/en/function.fgetss.php
 * @param resource $handle fs.validfp.all
 * @param int $length [optional] Length of the data to be retrieved.
 * @param string $allowable_tags [optional] You can use the optional third parameter to specify tags which should
 * not be stripped.
 * See strip_tags for details regarding
 * allowable_tags.
 * @return string a string of up to length - 1 bytes read from
 * the file pointed to by handle, with all HTML and PHP
 * code stripped.
 * <p>
 * If an error occurs, returns false.
 * </p>
 * @deprecated 
 */
function fgetss ($handle, int $length = null, string $allowable_tags = null) {}

/**
 * Binary-safe file read
 * @link http://www.php.net/manual/en/function.fread.php
 * @param resource $handle fs.file.pointer
 * @param int $length Up to length number of bytes read.
 * @return string the read string or false on failure.
 */
function fread ($handle, int $length) {}

/**
 * Opens file or URL
 * @link http://www.php.net/manual/en/function.fopen.php
 * @param string $filename <p>
 * If filename is of the form "scheme://...", it
 * is assumed to be a URL and PHP will search for a protocol handler
 * (also known as a wrapper) for that scheme. If no wrappers for that
 * protocol are registered, PHP will emit a notice to help you track
 * potential problems in your script and then continue as though
 * filename specifies a regular file.
 * </p>
 * <p>
 * If PHP has decided that filename specifies
 * a local file, then it will try to open a stream on that file.
 * The file must be accessible to PHP, so you need to ensure that
 * the file access permissions allow this access.
 * If you have enabled safe mode
 * or open_basedir further
 * restrictions may apply.
 * </p>
 * <p>
 * If PHP has decided that filename specifies
 * a registered protocol, and that protocol is registered as a
 * network URL, PHP will check to make sure that
 * allow_url_fopen is
 * enabled. If it is switched off, PHP will emit a warning and
 * the fopen call will fail.
 * </p>
 * <p>
 * The list of supported protocols can be found in . Some protocols (also referred to as
 * wrappers) support context
 * and/or php.ini options. Refer to the specific page for the
 * protocol in use for a list of options which can be set. (e.g.
 * php.ini value user_agent used by the
 * http wrapper).
 * </p>
 * <p>
 * On the Windows platform, be careful to escape any backslashes
 * used in the path to the file, or use forward slashes.
 * <pre>
 * <code>&lt;?php
 * $handle = fopen(&quot;c:\\folder\\resource.txt&quot;, &quot;r&quot;);
 * ?&gt;</code>
 * </pre>
 * </p>
 * @param string $mode <p>
 * The mode parameter specifies the type of access
 * you require to the stream. It may be any of the following:
 * <table>
 * A list of possible modes for fopen
 * using mode
 * <table>
 * <tr valign="top">
 * <td>mode</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>'r'</td>
 * <td>
 * Open for reading only; place the file pointer at the
 * beginning of the file.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>'r+'</td>
 * <td>
 * Open for reading and writing; place the file pointer at
 * the beginning of the file.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>'w'</td>
 * <td>
 * Open for writing only; place the file pointer at the
 * beginning of the file and truncate the file to zero length.
 * If the file does not exist, attempt to create it.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>'w+'</td>
 * <td>
 * Open for reading and writing; place the file pointer at
 * the beginning of the file and truncate the file to zero
 * length. If the file does not exist, attempt to create it.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>'a'</td>
 * <td>
 * Open for writing only; place the file pointer at the end of
 * the file. If the file does not exist, attempt to create it.
 * In this mode, fseek has no effect, writes are always appended.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>'a+'</td>
 * <td>
 * Open for reading and writing; place the file pointer at
 * the end of the file. If the file does not exist, attempt to
 * create it. In this mode, fseek only affects
 * the reading position, writes are always appended.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>'x'</td>
 * <td>
 * Create and open for writing only; place the file pointer at the
 * beginning of the file. If the file already exists, the
 * fopen call will fail by returning false and
 * generating an error of level E_WARNING. If
 * the file does not exist, attempt to create it. This is equivalent
 * to specifying O_EXCL|O_CREAT flags for the
 * underlying open(2) system call. 
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>'x+'</td>
 * <td>
 * Create and open for reading and writing; otherwise it has the
 * same behavior as 'x'.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>'c'</td>
 * <td>
 * Open the file for writing only. If the file does not exist, it is
 * created. If it exists, it is neither truncated (as opposed to
 * 'w'), nor the call to this function fails (as is
 * the case with 'x'). The file pointer is
 * positioned on the beginning of the file. This may be useful if it's
 * desired to get an advisory lock (see flock)
 * before attempting to modify the file, as using
 * 'w' could truncate the file before the lock
 * was obtained (if truncation is desired,
 * ftruncate can be used after the lock is
 * requested).
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>'c+'</td>
 * <td>
 * Open the file for reading and writing; otherwise it has the same
 * behavior as 'c'.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>'e'</td>
 * <td>
 * Set close-on-exec flag on the opened file descriptor. Only
 * available in PHP compiled on POSIX.1-2008 conform systems.
 * </td>
 * </tr>
 * </table>
 * </table>
 * </p>
 * <p>
 * Different operating system families have different line-ending
 * conventions. When you write a text file and want to insert a line
 * break, you need to use the correct line-ending character(s) for your
 * operating system. Unix based systems use \n as the
 * line ending character, Windows based systems use \r\n
 * as the line ending characters and Macintosh based systems use
 * \r as the line ending character.
 * </p>
 * <p>
 * If you use the wrong line ending characters when writing your files, you
 * might find that other applications that open those files will "look
 * funny".
 * </p>
 * <p>
 * Windows offers a text-mode translation flag ('t')
 * which will transparently translate \n to
 * \r\n when working with the file. In contrast, you
 * can also use 'b' to force binary mode, which will not
 * translate your data. To use these flags, specify either
 * 'b' or 't' as the last character
 * of the mode parameter.
 * </p>
 * <p>
 * The default translation mode depends on the SAPI and version of PHP that
 * you are using, so you are encouraged to always specify the appropriate
 * flag for portability reasons. You should use the 't'
 * mode if you are working with plain-text files and you use
 * \n to delimit your line endings in your script, but
 * expect your files to be readable with applications such as notepad. You
 * should use the 'b' in all other cases.
 * </p>
 * <p>
 * If you do not specify the 'b' flag when working with binary files, you
 * may experience strange problems with your data, including broken image
 * files and strange problems with \r\n characters.
 * </p>
 * <p>
 * For portability, it is strongly recommended that you always
 * use the 'b' flag when opening files with fopen.
 * </p>
 * <p>
 * Again, for portability, it is also strongly recommended that
 * you re-write code that uses or relies upon the 't'
 * mode so that it uses the correct line endings and
 * 'b' mode instead.
 * </p>
 * @param bool $use_include_path [optional] The optional third use_include_path parameter
 * can be set to '1' or true if you want to search for the file in the
 * include_path, too.
 * @param resource $context [optional] note.context-support
 * @return resource a file pointer resource on success, or false on error.
 */
function fopen (string $filename, string $mode, bool $use_include_path = null, $context = null) {}

/**
 * Output all remaining data on a file pointer
 * @link http://www.php.net/manual/en/function.fpassthru.php
 * @param resource $handle fs.validfp.all
 * @return int If an error occurs, fpassthru returns
 * false. Otherwise, fpassthru returns
 * the number of characters read from handle
 * and passed through to the output.
 */
function fpassthru ($handle) {}

/**
 * Truncates a file to a given length
 * @link http://www.php.net/manual/en/function.ftruncate.php
 * @param resource $handle <p>
 * The file pointer.
 * </p>
 * <p>
 * The handle must be open for writing.
 * </p>
 * @param int $size <p>
 * The size to truncate to.
 * </p>
 * <p>
 * If size is larger than the file then the file
 * is extended with null bytes.
 * </p>
 * <p>
 * If size is smaller than the file then the file
 * is truncated to that size.
 * </p>
 * @return bool true on success or false on failure
 */
function ftruncate ($handle, int $size) {}

/**
 * Gets information about a file using an open file pointer
 * @link http://www.php.net/manual/en/function.fstat.php
 * @param resource $handle fs.file.pointer
 * @return array an array with the statistics of the file; the format of the array
 * is described in detail on the stat manual page.
 */
function fstat ($handle) {}

/**
 * Seeks on a file pointer
 * @link http://www.php.net/manual/en/function.fseek.php
 * @param resource $handle fs.file.pointer
 * @param int $offset <p>
 * The offset.
 * </p>
 * <p>
 * To move to a position before the end-of-file, you need to pass
 * a negative value in offset and
 * set whence
 * to SEEK_END.
 * </p>
 * @param int $whence [optional] <p>
 * whence values are:
 * <p>
 * SEEK_SET - Set position equal to offset bytes.
 * SEEK_CUR - Set position to current location plus offset.
 * SEEK_END - Set position to end-of-file plus offset.
 * </p>
 * </p>
 * @return int Upon success, returns 0; otherwise, returns -1.
 */
function fseek ($handle, int $offset, int $whence = null) {}

/**
 * Returns the current position of the file read/write pointer
 * @link http://www.php.net/manual/en/function.ftell.php
 * @param resource $handle The file pointer must be valid, and must point to a file successfully
 * opened by fopen or popen.
 * ftell gives undefined results for append-only streams
 * (opened with "a" flag).
 * @return int the position of the file pointer referenced by
 * handle as an integer; i.e., its offset into the file stream.
 * <p>
 * If an error occurs, returns false.
 * </p>
 */
function ftell ($handle) {}

/**
 * Flushes the output to a file
 * @link http://www.php.net/manual/en/function.fflush.php
 * @param resource $handle fs.validfp.all
 * @return bool true on success or false on failure
 */
function fflush ($handle) {}

/**
 * Binary-safe file write
 * @link http://www.php.net/manual/en/function.fwrite.php
 * @param resource $handle fs.file.pointer
 * @param string $string The string that is to be written.
 * @param int $length [optional] <p>
 * If the length argument is given, writing will
 * stop after length bytes have been written or
 * the end of string is reached, whichever comes
 * first.
 * </p>
 * <p>
 * Note that if the length argument is given,
 * then the magic_quotes_runtime
 * configuration option will be ignored and no slashes will be
 * stripped from string.
 * </p>
 * @return int 
 */
function fwrite ($handle, string $string, int $length = null) {}

/**
 * Alias: fwrite
 * @link http://www.php.net/manual/en/function.fputs.php
 * @param mixed $fp
 * @param mixed $str
 * @param mixed $length [optional]
 */
function fputs ($fp, $str, $length = null) {}

/**
 * Makes directory
 * @link http://www.php.net/manual/en/function.mkdir.php
 * @param string $pathname The directory path.
 * @param int $mode [optional] <p>
 * The mode is 0777 by default, which means the widest possible
 * access. For more information on modes, read the details
 * on the chmod page.
 * </p>
 * <p>
 * mode is ignored on Windows.
 * </p>
 * <p>
 * Note that you probably want to specify the mode as an octal number,
 * which means it should have a leading zero. The mode is also modified
 * by the current umask, which you can change using
 * umask.
 * </p>
 * @param bool $recursive [optional] Allows the creation of nested directories specified in the 
 * pathname.
 * @param resource $context [optional] note.context-support
 * @return bool true on success or false on failure
 */
function mkdir (string $pathname, int $mode = null, bool $recursive = null, $context = null) {}

/**
 * Renames a file or directory
 * @link http://www.php.net/manual/en/function.rename.php
 * @param string $oldname <p>
 * The old name.
 * </p>
 * <p>
 * The wrapper used in oldname
 * must match the wrapper used in
 * newname.
 * </p>
 * @param string $newname The new name.
 * @param resource $context [optional] note.context-support
 * @return bool true on success or false on failure
 */
function rename (string $oldname, string $newname, $context = null) {}

/**
 * Copies file
 * @link http://www.php.net/manual/en/function.copy.php
 * @param string $source Path to the source file.
 * @param string $dest <p>
 * The destination path. If dest is a URL, the
 * copy operation may fail if the wrapper does not support overwriting of
 * existing files.
 * </p>
 * <p>
 * If the destination file already exists, it will be overwritten.
 * </p>
 * @param resource $context [optional] A valid context resource created with 
 * stream_context_create.
 * @return bool true on success or false on failure
 */
function copy (string $source, string $dest, $context = null) {}

/**
 * Create file with unique file name
 * @link http://www.php.net/manual/en/function.tempnam.php
 * @param string $dir The directory where the temporary filename will be created.
 * @param string $prefix <p>
 * The prefix of the generated temporary filename.
 * </p>
 * Windows uses only the first three characters of prefix.
 * @return string the new temporary filename (with path), or false on
 * failure.
 */
function tempnam (string $dir, string $prefix) {}

/**
 * Creates a temporary file
 * @link http://www.php.net/manual/en/function.tmpfile.php
 * @return resource a file handle, similar to the one returned by
 * fopen, for the new file or false on failure.
 */
function tmpfile () {}

/**
 * Reads entire file into an array
 * @link http://www.php.net/manual/en/function.file.php
 * @param string $filename <p>
 * Path to the file.
 * </p>
 * tip.fopen-wrapper
 * @param int $flags [optional] <p>
 * The optional parameter flags can be one, or
 * more, of the following constants:
 * <p>
 * FILE_USE_INCLUDE_PATH
 * <br>
 * Search for the file in the include_path.
 * FILE_IGNORE_NEW_LINES
 * <br>
 * Omit newline at the end of each array element
 * FILE_SKIP_EMPTY_LINES
 * <br>
 * Skip empty lines
 * </p>
 * </p>
 * @param resource $context [optional] <p>
 * A context resource created with the 
 * stream_context_create function.
 * </p>
 * <p>
 * note.context-support
 * </p>
 * @return array the file in an array. Each element of the array corresponds to a
 * line in the file, with the newline still attached. Upon failure,
 * file returns false.
 * <p>
 * Each line in the resulting array will include the line ending, unless
 * FILE_IGNORE_NEW_LINES is used.
 * </p>
 */
function file (string $filename, int $flags = null, $context = null) {}

/**
 * Reads entire file into a string
 * @link http://www.php.net/manual/en/function.file-get-contents.php
 * @param string $filename Name of the file to read.
 * @param bool $use_include_path [optional] As of PHP 5 the FILE_USE_INCLUDE_PATH constant can be used
 * to trigger include path
 * search.
 * This is not possible if strict typing
 * is enabled, since FILE_USE_INCLUDE_PATH is an
 * int. Use true instead.
 * @param resource $context [optional] A valid context resource created with 
 * stream_context_create. If you don't need to use a
 * custom context, you can skip this parameter by null.
 * @param int $offset [optional] <p>
 * The offset where the reading starts on the original stream.
 * Negative offsets count from the end of the stream.
 * </p>
 * <p>
 * Seeking (offset) is not supported with remote files.
 * Attempting to seek on non-local files may work with small offsets, but this
 * is unpredictable because it works on the buffered stream.
 * </p>
 * @param int $maxlen [optional] Maximum length of data read. The default is to read until end
 * of file is reached. Note that this parameter is applied to the 
 * stream processed by the filters.
 * @return string The function returns the read data or false on failure.
 */
function file_get_contents (string $filename, bool $use_include_path = null, $context = null, int $offset = null, int $maxlen = null) {}

/**
 * Write data to a file
 * @link http://www.php.net/manual/en/function.file-put-contents.php
 * @param string $filename Path to the file where to write the data.
 * @param mixed $data <p>
 * The data to write. Can be either a string, an
 * array or a stream resource.
 * </p>
 * <p>
 * If data is a stream resource, the
 * remaining buffer of that stream will be copied to the specified file.
 * This is similar with using stream_copy_to_stream.
 * </p>
 * <p>
 * You can also specify the data parameter as a single
 * dimension array. This is equivalent to
 * file_put_contents($filename, implode('', $array)).
 * </p>
 * @param int $flags [optional] <p>
 * The value of flags can be any combination of 
 * the following flags, joined with the binary OR (|)
 * operator.
 * </p>
 * <p>
 * <table>
 * Available flags
 * <table>
 * <tr valign="top">
 * <td>Flag</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>
 * FILE_USE_INCLUDE_PATH
 * </td>
 * <td>
 * Search for filename in the include directory.
 * See include_path for more
 * information.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>
 * FILE_APPEND
 * </td>
 * <td>
 * If file filename already exists, append 
 * the data to the file instead of overwriting it.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>
 * LOCK_EX
 * </td>
 * <td>
 * Acquire an exclusive lock on the file while proceeding to the 
 * writing. In other words, a flock call happens
 * between the fopen call and the 
 * fwrite call. This is not identical to an 
 * fopen call with mode "x".
 * </td>
 * </tr>
 * </table>
 * </table>
 * </p>
 * @param resource $context [optional] A valid context resource created with 
 * stream_context_create.
 * @return int This function returns the number of bytes that were written to the file, or
 * false on failure.
 */
function file_put_contents (string $filename, $data, int $flags = null, $context = null) {}

/**
 * Runs the equivalent of the select() system call on the given
 * arrays of streams with a timeout specified by tv_sec and tv_usec
 * @link http://www.php.net/manual/en/function.stream-select.php
 * @param array $read The streams listed in the read array will be watched to
 * see if characters become available for reading (more precisely, to see if
 * a read will not block - in particular, a stream resource is also ready on
 * end-of-file, in which case an fread will return
 * a zero length string).
 * @param array $write The streams listed in the write array will be
 * watched to see if a write will not block.
 * @param array $except <p>
 * The streams listed in the except array will be
 * watched for high priority exceptional ("out-of-band") data arriving.
 * </p>
 * <p>
 * When stream_select returns, the arrays
 * read, write and
 * except are modified to indicate which stream
 * resource(s) actually changed status.
 * </p>
 * You do not need to pass every array to
 * stream_select. You can leave it out and use an
 * empty array or null instead. Also do not forget that those arrays are
 * passed by reference and will be modified after
 * stream_select returns.
 * @param int $tv_sec <p>
 * The tv_sec and tv_usec
 * together form the timeout parameter,
 * tv_sec specifies the number of seconds while
 * tv_usec the number of microseconds.
 * The timeout is an upper bound on the amount of time
 * that stream_select will wait before it returns.
 * If tv_sec and tv_usec are
 * both set to 0, stream_select will
 * not wait for data - instead it will return immediately, indicating the
 * current status of the streams.
 * </p>
 * <p>
 * If tv_sec is null stream_select
 * can block indefinitely, returning only when an event on one of the
 * watched streams occurs (or if a signal interrupts the system call).
 * </p>
 * <p>
 * Using a timeout value of 0 allows you to
 * instantaneously poll the status of the streams, however, it is NOT a
 * good idea to use a 0 timeout value in a loop as it
 * will cause your script to consume too much CPU time.
 * </p>
 * <p>
 * It is much better to specify a timeout value of a few seconds, although
 * if you need to be checking and running other code concurrently, using a
 * timeout value of at least 200000 microseconds will
 * help reduce the CPU usage of your script.
 * </p>
 * <p>
 * Remember that the timeout value is the maximum time that will elapse;
 * stream_select will return as soon as the
 * requested streams are ready for use.
 * </p>
 * @param int $tv_usec [optional] See tv_sec description.
 * @return int On success stream_select returns the number of
 * stream resources contained in the modified arrays, which may be zero if
 * the timeout expires before anything interesting happens. On error false
 * is returned and a warning raised (this can happen if the system call is
 * interrupted by an incoming signal).
 */
function stream_select (array &$read, array &$write, array &$except, int $tv_sec, int $tv_usec = null) {}

/**
 * Creates a stream context
 * @link http://www.php.net/manual/en/function.stream-context-create.php
 * @param array $options [optional] <p>
 * Must be an associative array of associative arrays in the format
 * $arr['wrapper']['option'] = $value. Refer to context options for a list of available wrappers and options.
 * </p>
 * <p>
 * Default to an empty array.
 * </p>
 * @param array $params [optional] Must be an associative array in the format
 * $arr['parameter'] = $value.
 * Refer to context parameters for
 * a listing of standard stream parameters.
 * @return resource A stream context resource.
 */
function stream_context_create (array $options = null, array $params = null) {}

/**
 * Set parameters for a stream/wrapper/context
 * @link http://www.php.net/manual/en/function.stream-context-set-params.php
 * @param resource $stream_or_context The stream or context to apply the parameters too.
 * @param array $params <p>
 * An array of parameters to set.
 * </p>
 * <p>
 * params should be an associative array of the structure:
 * $params['paramname'] = "paramvalue";.
 * </p>
 * @return bool true on success or false on failure
 */
function stream_context_set_params ($stream_or_context, array $params) {}

/**
 * Retrieves parameters from a context
 * @link http://www.php.net/manual/en/function.stream-context-get-params.php
 * @param resource $stream_or_context A stream resource or a
 * context resource
 * @return array an associate array containing all context options and parameters.
 */
function stream_context_get_params ($stream_or_context) {}

/**
 * Sets an option for a stream/wrapper/context
 * @link http://www.php.net/manual/en/function.stream-context-set-option.php
 * @param resource $stream_or_context The stream or context resource to apply the options to.
 * @param string $wrapper 
 * @param string $option 
 * @param mixed $value 
 * @return bool true on success or false on failure
 */
function stream_context_set_option ($stream_or_context, string $wrapper, string $option, $value) {}

/**
 * Retrieve options for a stream/wrapper/context
 * @link http://www.php.net/manual/en/function.stream-context-get-options.php
 * @param resource $stream_or_context The stream or context to get options from
 * @return array an associative array with the options.
 */
function stream_context_get_options ($stream_or_context) {}

/**
 * Retrieve the default stream context
 * @link http://www.php.net/manual/en/function.stream-context-get-default.php
 * @param array $options [optional] options must be an associative
 * array of associative arrays in the format
 * $arr['wrapper']['option'] = $value.
 * <p>
 * As of PHP 5.3.0, the stream_context_set_default function
 * can be used to set the default context.
 * </p>
 * @return resource A stream context resource.
 */
function stream_context_get_default (array $options = null) {}

/**
 * Set the default stream context
 * @link http://www.php.net/manual/en/function.stream-context-set-default.php
 * @param array $options <p>
 * The options to set for the default context.
 * </p>
 * <p>
 * options must be an associative
 * array of associative arrays in the format
 * $arr['wrapper']['option'] = $value.
 * </p>
 * @return resource the default stream context.
 */
function stream_context_set_default (array $options) {}

/**
 * Attach a filter to a stream
 * @link http://www.php.net/manual/en/function.stream-filter-prepend.php
 * @param resource $stream The target stream.
 * @param string $filtername The filter name.
 * @param int $read_write [optional] By default, stream_filter_prepend will
 * attach the filter to the read filter chain
 * if the file was opened for reading (i.e. File Mode:
 * r, and/or +). The filter
 * will also be attached to the write filter chain
 * if the file was opened for writing (i.e. File Mode:
 * w, a, and/or +).
 * STREAM_FILTER_READ,
 * STREAM_FILTER_WRITE, and/or
 * STREAM_FILTER_ALL can also be passed to the
 * read_write parameter to override this behavior.
 * See stream_filter_append for an example of
 * using this parameter.
 * @param mixed $params [optional] <p>
 * This filter will be added with the specified params
 * to the <p>stream_filter_append.
 * </p>
 * @return resource a resource on success or false on failure. The resource can be
 * used to refer to this filter instance during a call to
 * stream_filter_remove.
 * <p>
 * false is returned if stream is not a resource or
 * if filtername cannot be located.
 * </p>
 */
function stream_filter_prepend ($stream, string $filtername, int $read_write = null, $params = null) {}

/**
 * Attach a filter to a stream
 * @link http://www.php.net/manual/en/function.stream-filter-append.php
 * @param resource $stream The target stream.
 * @param string $filtername The filter name.
 * @param int $read_write [optional] By default, stream_filter_append will
 * attach the filter to the read filter chain
 * if the file was opened for reading (i.e. File Mode:
 * r, and/or +). The filter
 * will also be attached to the write filter chain
 * if the file was opened for writing (i.e. File Mode:
 * w, a, and/or +).
 * STREAM_FILTER_READ,
 * STREAM_FILTER_WRITE, and/or
 * STREAM_FILTER_ALL can also be passed to the
 * read_write parameter to override this behavior.
 * @param mixed $params [optional] This filter will be added with the specified 
 * params to the end of
 * the list and will therefore be called last during stream operations.
 * To add a filter to the beginning of the list, use
 * stream_filter_prepend.
 * @return resource a resource on success or false on failure. The resource can be
 * used to refer to this filter instance during a call to
 * stream_filter_remove.
 * <p>
 * false is returned if stream is not a resource or
 * if filtername cannot be located.
 * </p>
 */
function stream_filter_append ($stream, string $filtername, int $read_write = null, $params = null) {}

/**
 * Remove a filter from a stream
 * @link http://www.php.net/manual/en/function.stream-filter-remove.php
 * @param resource $stream_filter The stream filter to be removed.
 * @return bool true on success or false on failure
 */
function stream_filter_remove ($stream_filter) {}

/**
 * Open Internet or Unix domain socket connection
 * @link http://www.php.net/manual/en/function.stream-socket-client.php
 * @param string $remote_socket Address to the socket to connect to.
 * @param int $errno [optional] Will be set to the system level error number if connection fails.
 * @param string $errstr [optional] Will be set to the system level error message if the connection fails.
 * @param float $timeout [optional] <p>
 * Number of seconds until the connect() system call
 * should timeout.
 * This parameter only applies when not making asynchronous
 * connection attempts.
 * <p>
 * To set a timeout for reading/writing data over the socket, use the
 * stream_set_timeout, as the
 * timeout only applies while making connecting
 * the socket.
 * </p>
 * </p>
 * @param int $flags [optional] Bitmask field which may be set to any combination of connection flags.
 * Currently the select of connection flags is limited to
 * STREAM_CLIENT_CONNECT (default),
 * STREAM_CLIENT_ASYNC_CONNECT and
 * STREAM_CLIENT_PERSISTENT.
 * @param resource $context [optional] A valid context resource created with stream_context_create.
 * @return resource On success a stream resource is returned which may
 * be used together with the other file functions (such as
 * fgets, fgetss,
 * fwrite, fclose, and
 * feof), false on failure.
 */
function stream_socket_client (string $remote_socket, int &$errno = null, string &$errstr = null, float $timeout = null, int $flags = null, $context = null) {}

/**
 * Create an Internet or Unix domain server socket
 * @link http://www.php.net/manual/en/function.stream-socket-server.php
 * @param string $local_socket <p>
 * The type of socket created is determined by the transport specified
 * using standard URL formatting: transport://target.
 * </p>
 * <p>
 * For Internet Domain sockets (AF_INET) such as TCP and UDP, the
 * target portion of the 
 * remote_socket parameter should consist of a
 * hostname or IP address followed by a colon and a port number. For
 * Unix domain sockets, the target portion should
 * point to the socket file on the filesystem.
 * </p>
 * <p>
 * Depending on the environment, Unix domain sockets may not be available.
 * A list of available transports can be retrieved using
 * stream_get_transports. See
 * for a list of bulitin transports.
 * </p>
 * @param int $errno [optional] If the optional errno and errstr
 * arguments are present they will be set to indicate the actual system
 * level error that occurred in the system-level socket(),
 * bind(), and listen() calls. If
 * the value returned in errno is 
 * 0 and the function returned false, it is an
 * indication that the error occurred before the bind()
 * call. This is most likely due to a problem initializing the socket. 
 * Note that the errno and
 * errstr arguments will always be passed by reference.
 * @param string $errstr [optional] See errno description.
 * @param int $flags [optional] <p>
 * A bitmask field which may be set to any combination of socket creation
 * flags.
 * </p>
 * <p>
 * For UDP sockets, you must use STREAM_SERVER_BIND as
 * the flags parameter.
 * </p>
 * @param resource $context [optional] 
 * @return resource the created stream, or false on error.
 */
function stream_socket_server (string $local_socket, int &$errno = null, string &$errstr = null, int $flags = null, $context = null) {}

/**
 * Accept a connection on a socket created by stream_socket_server
 * @link http://www.php.net/manual/en/function.stream-socket-accept.php
 * @param resource $server_socket The server socket to accept a connection from.
 * @param float $timeout [optional] Override the default socket accept timeout. Time should be given in
 * seconds.
 * @param string $peername [optional] <p>
 * Will be set to the name (address) of the client which connected, if
 * included and available from the selected transport.
 * </p>
 * <p>
 * Can also be determined later using
 * stream_socket_get_name.
 * </p>
 * @return resource a stream to the accepted socket connection or false on failure.
 */
function stream_socket_accept ($server_socket, float $timeout = null, string &$peername = null) {}

/**
 * Retrieve the name of the local or remote sockets
 * @link http://www.php.net/manual/en/function.stream-socket-get-name.php
 * @param resource $handle The socket to get the name of.
 * @param bool $want_peer If set to true the remote socket name will be returned, if set
 * to false the local socket name will be returned.
 * @return string The name of the socket.
 */
function stream_socket_get_name ($handle, bool $want_peer) {}

/**
 * Receives data from a socket, connected or not
 * @link http://www.php.net/manual/en/function.stream-socket-recvfrom.php
 * @param resource $socket The remote socket.
 * @param int $length The number of bytes to receive from the socket.
 * @param int $flags [optional] The value of flags can be any combination
 * of the following:
 * <table>
 * Possible values for flags
 * <table>
 * <tr valign="top">
 * <td>STREAM_OOB</td>
 * <td>
 * Process OOB (out-of-band) data.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>STREAM_PEEK</td>
 * <td>
 * Retrieve data from the socket, but do not consume the buffer.
 * Subsequent calls to fread or
 * stream_socket_recvfrom will see
 * the same data.
 * </td>
 * </tr>
 * </table>
 * </table>
 * @param string $address [optional] If address is provided it will be populated with
 * the address of the remote socket.
 * @return string the read data, as a string
 */
function stream_socket_recvfrom ($socket, int $length, int $flags = null, string &$address = null) {}

/**
 * Sends a message to a socket, whether it is connected or not
 * @link http://www.php.net/manual/en/function.stream-socket-sendto.php
 * @param resource $socket The socket to send data to.
 * @param string $data The data to be sent.
 * @param int $flags [optional] The value of flags can be any combination
 * of the following:
 * <table>
 * possible values for flags
 * <table>
 * <tr valign="top">
 * <td>STREAM_OOB</td>
 * <td>
 * Process OOB (out-of-band) data.
 * </td>
 * </tr>
 * </table>
 * </table>
 * @param string $address [optional] <p>
 * The address specified when the socket stream was created will be used
 * unless an alternate address is specified in address.
 * </p>
 * <p>
 * If specified, it must be in dotted quad (or [ipv6]) format.
 * </p>
 * @return int a result code, as an integer.
 */
function stream_socket_sendto ($socket, string $data, int $flags = null, string $address = null) {}

/**
 * Turns encryption on/off on an already connected socket
 * @link http://www.php.net/manual/en/function.stream-socket-enable-crypto.php
 * @param resource $stream The stream resource.
 * @param bool $enable Enable/disable cryptography on the stream.
 * @param int $crypto_type [optional] <p>
 * Setup encryption on the stream.
 * Valid methods are
 * <p>
 * <br>STREAM_CRYPTO_METHOD_SSLv2_CLIENT
 * <br>STREAM_CRYPTO_METHOD_SSLv3_CLIENT
 * <br>STREAM_CRYPTO_METHOD_SSLv23_CLIENT
 * <br>STREAM_CRYPTO_METHOD_ANY_CLIENT
 * <br>STREAM_CRYPTO_METHOD_TLS_CLIENT
 * <br>STREAM_CRYPTO_METHOD_TLSv1_0_CLIENT
 * <br>STREAM_CRYPTO_METHOD_TLSv1_1_CLIENT
 * <br>STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT
 * <br>STREAM_CRYPTO_METHOD_SSLv2_SERVER
 * <br>STREAM_CRYPTO_METHOD_SSLv3_SERVER
 * <br>STREAM_CRYPTO_METHOD_SSLv23_SERVER
 * <br>STREAM_CRYPTO_METHOD_ANY_SERVER
 * <br>STREAM_CRYPTO_METHOD_TLS_SERVER
 * <br>STREAM_CRYPTO_METHOD_TLSv1_0_SERVER
 * <br>STREAM_CRYPTO_METHOD_TLSv1_1_SERVER
 * <br>STREAM_CRYPTO_METHOD_TLSv1_2_SERVER
 * </p>
 * </p>
 * <p>
 * If omitted, the crypto_method context option on
 * the stream's SSL context will be used instead.
 * </p>
 * @param resource $session_stream [optional] Seed the stream with settings from session_stream.
 * @return mixed true on success, false if negotiation has failed or
 * 0 if there isn't enough data and you should try again
 * (only for non-blocking sockets).
 */
function stream_socket_enable_crypto ($stream, bool $enable, int $crypto_type = null, $session_stream = null) {}

/**
 * Shutdown a full-duplex connection
 * @link http://www.php.net/manual/en/function.stream-socket-shutdown.php
 * @param resource $stream An open stream (opened with stream_socket_client,
 * for example)
 * @param int $how One of the following constants: STREAM_SHUT_RD
 * (disable further receptions), STREAM_SHUT_WR
 * (disable further transmissions) or
 * STREAM_SHUT_RDWR (disable further receptions and
 * transmissions).
 * @return bool true on success or false on failure
 */
function stream_socket_shutdown ($stream, int $how) {}

/**
 * Creates a pair of connected, indistinguishable socket streams
 * @link http://www.php.net/manual/en/function.stream-socket-pair.php
 * @param int $domain The protocol family to be used: STREAM_PF_INET,
 * STREAM_PF_INET6 or
 * STREAM_PF_UNIX
 * @param int $type The type of communication to be used:
 * STREAM_SOCK_DGRAM,
 * STREAM_SOCK_RAW,
 * STREAM_SOCK_RDM,
 * STREAM_SOCK_SEQPACKET or
 * STREAM_SOCK_STREAM
 * @param int $protocol The protocol to be used: STREAM_IPPROTO_ICMP,
 * STREAM_IPPROTO_IP,
 * STREAM_IPPROTO_RAW,
 * STREAM_IPPROTO_TCP or
 * STREAM_IPPROTO_UDP
 * @return array an array with the two socket resources on success, or
 * false on failure.
 */
function stream_socket_pair (int $domain, int $type, int $protocol) {}

/**
 * Copies data from one stream to another
 * @link http://www.php.net/manual/en/function.stream-copy-to-stream.php
 * @param resource $source The source stream
 * @param resource $dest The destination stream
 * @param int $maxlength [optional] Maximum bytes to copy
 * @param int $offset [optional] The offset where to start to copy data
 * @return int the total count of bytes copied, or false on failure.
 */
function stream_copy_to_stream ($source, $dest, int $maxlength = null, int $offset = null) {}

/**
 * Reads remainder of a stream into a string
 * @link http://www.php.net/manual/en/function.stream-get-contents.php
 * @param resource $handle A stream resource (e.g. returned from fopen)
 * @param int $maxlength [optional] The maximum bytes to read. Defaults to -1 (read all the remaining
 * buffer).
 * @param int $offset [optional] Seek to the specified offset before reading. If this number is negative,
 * no seeking will occur and reading will start from the current position.
 * @return string a string or false on failure.
 */
function stream_get_contents ($handle, int $maxlength = null, int $offset = null) {}

/**
 * Tells whether the stream supports locking
 * @link http://www.php.net/manual/en/function.stream-supports-lock.php
 * @param resource $stream The stream to check.
 * @return bool true on success or false on failure
 */
function stream_supports_lock ($stream) {}

/**
 * Check if a stream is a TTY
 * @link http://www.php.net/manual/en/function.stream-isatty.php
 * @param resource $stream 
 * @return bool true on success or false on failure
 */
function stream_isatty ($stream) {}

/**
 * Get or set VT100 support for the specified stream associated to an output buffer of a Windows console.
 * @link http://www.php.net/manual/en/function.sapi-windows-vt100-support.php
 * @param resource $stream The stream on which the function will operate.
 * @param bool $enable [optional] If specified, the VT100 feature will be enabled (if true) or disabled (if false).
 * @return bool If enable is not specified: returns true if the VT100 feature is enabled, false otherwise.
 * <p>
 * If enable is specified: Returns true on success or false on failure
 * </p>
 */
function sapi_windows_vt100_support ($stream, bool $enable = null) {}

/**
 * Gets line from file pointer and parse for CSV fields
 * @link http://www.php.net/manual/en/function.fgetcsv.php
 * @param resource $handle A valid file pointer to a file successfully opened by
 * fopen, popen, or
 * fsockopen.
 * @param int $length [optional] <p>
 * Must be greater than the longest line (in characters) to be found in
 * the CSV file (allowing for trailing line-end characters). Otherwise the
 * line is split in chunks of length characters,
 * unless the split would occur inside an enclosure.
 * </p>
 * <p>
 * Omitting this parameter (or setting it to 0 in PHP
 * 5.1.0 and later) the maximum line length is not limited, which is
 * slightly slower.
 * </p>
 * @param string $delimiter [optional] The optional delimiter parameter sets the field delimiter (one character only).
 * @param string $enclosure [optional] The optional enclosure parameter sets the field enclosure character (one character only).
 * @param string $escape [optional] <p>
 * The optional escape parameter sets the escape character (one character only).
 * </p>
 * Usually an enclosure character is escaped inside
 * a field by doubling it; however, the escape
 * character can be used as an alternative. So for the default parameter
 * values "" and \" have the same
 * meaning. Other than allowing to escape the
 * enclosure character the
 * escape character has no special meaning; it isn't
 * even meant to escape itself.
 * @return array an indexed array containing the fields read.
 * <p>
 * A blank line in a CSV file will be returned as an array
 * comprising a single null field, and will not be treated
 * as an error.
 * </p>
 * note.line-endings
 * <p>
 * fgetcsv returns null if an invalid
 * handle is supplied or false on other errors,
 * including end of file.
 * </p>
 */
function fgetcsv ($handle, int $length = null, string $delimiter = null, string $enclosure = null, string $escape = null) {}

/**
 * Format line as CSV and write to file pointer
 * @link http://www.php.net/manual/en/function.fputcsv.php
 * @param resource $handle fs.validfp.all
 * @param array $fields An array of strings.
 * @param string $delimiter [optional] The optional delimiter parameter sets the field
 * delimiter (one character only).
 * @param string $enclosure [optional] The optional enclosure parameter sets the field
 * enclosure (one character only).
 * @param string $escape_char [optional] The optional escape_char parameter sets the
 * escape character (one character only).
 * @return int the length of the written string or false on failure.
 */
function fputcsv ($handle, array $fields, string $delimiter = null, string $enclosure = null, string $escape_char = null) {}

/**
 * Portable advisory file locking
 * @link http://www.php.net/manual/en/function.flock.php
 * @param resource $handle fs.file.pointer
 * @param int $operation <p>
 * operation is one of the following:
 * <p>
 * <br>
 * LOCK_SH to acquire a shared lock (reader).
 * <br>
 * LOCK_EX to acquire an exclusive lock (writer).
 * <br>
 * LOCK_UN to release a lock (shared or exclusive).
 * </p>
 * </p>
 * <p>
 * It is also possible to add LOCK_NB as a bitmask to one 
 * of the above operations if you don't want flock to 
 * block while locking.
 * </p>
 * @param int $wouldblock [optional] The optional third argument is set to 1 if the lock would block
 * (EWOULDBLOCK errno condition).
 * @return bool true on success or false on failure
 */
function flock ($handle, int $operation, int &$wouldblock = null) {}

/**
 * Extracts all meta tag content attributes from a file and returns an array
 * @link http://www.php.net/manual/en/function.get-meta-tags.php
 * @param string $filename <p>
 * The path to the HTML file, as a string. This can be a local file or an
 * URL.
 * </p>
 * <p>
 * What get_meta_tags parses
 * <pre>
 * </pre>
 * (pay attention to line endings - PHP uses a native function to
 * parse the input, so a Mac file won't work on Unix).
 * </p>
 * @param bool $use_include_path [optional] Setting use_include_path to true will result
 * in PHP trying to open the file along the standard include path as per
 * the include_path directive.
 * This is used for local files, not URLs.
 * @return array an array with all the parsed meta tags.
 * <p>
 * The value of the name property becomes the key, the value of the content
 * property becomes the value of the returned array, so you can easily use
 * standard array functions to traverse it or access single values. 
 * Special characters in the value of the name property are substituted with
 * '_', the rest is converted to lower case. If two meta tags have the same
 * name, only the last one is returned.
 * </p>
 */
function get_meta_tags (string $filename, bool $use_include_path = null) {}

/**
 * Set read file buffering on the given stream
 * @link http://www.php.net/manual/en/function.stream-set-read-buffer.php
 * @param resource $stream The file pointer.
 * @param int $buffer The number of bytes to buffer. If buffer
 * is 0 then read operations are unbuffered. This ensures that all reads
 * with fread are completed before other processes are
 * allowed to read from that input stream.
 * @return int 0 on success, or another value if the request
 * cannot be honored.
 */
function stream_set_read_buffer ($stream, int $buffer) {}

/**
 * Sets write file buffering on the given stream
 * @link http://www.php.net/manual/en/function.stream-set-write-buffer.php
 * @param resource $stream The file pointer.
 * @param int $buffer The number of bytes to buffer. If buffer
 * is 0 then write operations are unbuffered. This ensures that all writes
 * with fwrite are completed before other processes are
 * allowed to write to that output stream.
 * @return int 0 on success, or another value if the request cannot be honored.
 */
function stream_set_write_buffer ($stream, int $buffer) {}

/**
 * Alias: stream_set_write_buffer
 * @link http://www.php.net/manual/en/function.set-file-buffer.php
 * @param mixed $fp
 * @param mixed $buffer
 */
function set_file_buffer ($fp, $buffer) {}

/**
 * Set the stream chunk size
 * @link http://www.php.net/manual/en/function.stream-set-chunk-size.php
 * @param resource $fp The target stream.
 * @param int $chunk_size The desired new chunk size.
 * @return int the previous chunk size on success.
 * <p>
 * Will return false if chunk_size is less than 1 or
 * greater than PHP_INT_MAX.
 * </p>
 */
function stream_set_chunk_size ($fp, int $chunk_size) {}

/**
 * Set blocking/non-blocking mode on a stream
 * @link http://www.php.net/manual/en/function.stream-set-blocking.php
 * @param resource $stream The stream.
 * @param bool $mode If mode is false, the given stream
 * will be switched to non-blocking mode, and if true, it
 * will be switched to blocking mode. This affects calls like
 * fgets and fread
 * that read from the stream. In non-blocking mode an
 * fgets call will always return right away
 * while in blocking mode it will wait for data to become available
 * on the stream.
 * @return bool true on success or false on failure
 */
function stream_set_blocking ($stream, bool $mode) {}

/**
 * Alias: stream_set_blocking
 * @link http://www.php.net/manual/en/function.socket-set-blocking.php
 * @param mixed $socket
 * @param mixed $mode
 */
function socket_set_blocking ($socket, $mode) {}

/**
 * Retrieves header/meta data from streams/file pointers
 * @link http://www.php.net/manual/en/function.stream-get-meta-data.php
 * @param resource $stream The stream can be any stream created by fopen,
 * fsockopen and pfsockopen.
 * @return array The result array contains the following items:
 * <p>
 * <br>
 * <p>
 * timed_out (bool) - true if the stream
 * timed out while waiting for data on the last call to
 * fread or fgets.
 * </p>
 * <br>
 * <p>
 * blocked (bool) - true if the stream is
 * in blocking IO mode. See stream_set_blocking.
 * </p>
 * <br>
 * <p>
 * eof (bool) - true if the stream has reached
 * end-of-file. Note that for socket streams this member can be true
 * even when unread_bytes is non-zero. To
 * determine if there is more data to be read, use
 * feof instead of reading this item.
 * </p>
 * <br>
 * <p>
 * unread_bytes (int) - the number of bytes
 * currently contained in the PHP's own internal buffer.
 * </p>
 * You shouldn't use this value in a script.
 * <br>
 * <p>
 * stream_type (string) - a label describing
 * the underlying implementation of the stream.
 * </p>
 * <br>
 * <p>
 * wrapper_type (string) - a label describing
 * the protocol wrapper implementation layered over the stream.
 * See for more information about wrappers.
 * </p>
 * <br>
 * <p>
 * wrapper_data (mixed) - wrapper specific
 * data attached to this stream. See for
 * more information about wrappers and their wrapper data.
 * </p>
 * <br>
 * <p>
 * mode (string) - the type of access required for
 * this stream (see Table 1 of the fopen() reference)
 * </p>
 * <br>
 * <p>
 * seekable (bool) - whether the current stream can
 * be seeked.
 * </p>
 * <br>
 * <p>
 * uri (string) - the URI/filename associated with this
 * stream.
 * </p>
 */
function stream_get_meta_data ($stream) {}

/**
 * Gets line from stream resource up to a given delimiter
 * @link http://www.php.net/manual/en/function.stream-get-line.php
 * @param resource $handle A valid file handle.
 * @param int $length The number of bytes to read from the handle.
 * @param string $ending [optional] An optional string delimiter.
 * @return string a string of up to length bytes read from the file
 * pointed to by handle.
 * <p>
 * If an error occurs, returns false.
 * </p>
 */
function stream_get_line ($handle, int $length, string $ending = null) {}

/**
 * Register a URL wrapper implemented as a PHP class
 * @link http://www.php.net/manual/en/function.stream-wrapper-register.php
 * @param string $protocol The wrapper name to be registered.
 * @param string $classname The classname which implements the protocol.
 * @param int $flags [optional] Should be set to STREAM_IS_URL if
 * protocol is a URL protocol. Default is 0, local
 * stream.
 * @return bool true on success or false on failure
 * <p>
 * stream_wrapper_register will return false if the
 * protocol already has a handler.
 * </p>
 */
function stream_wrapper_register (string $protocol, string $classname, int $flags = null) {}

/**
 * Alias: stream_wrapper_register
 * @link http://www.php.net/manual/en/function.stream-register-wrapper.php
 * @param mixed $protocol
 * @param mixed $classname
 * @param mixed $flags [optional]
 */
function stream_register_wrapper ($protocol, $classname, $flags = null) {}

/**
 * Unregister a URL wrapper
 * @link http://www.php.net/manual/en/function.stream-wrapper-unregister.php
 * @param string $protocol 
 * @return bool true on success or false on failure
 */
function stream_wrapper_unregister (string $protocol) {}

/**
 * Restores a previously unregistered built-in wrapper
 * @link http://www.php.net/manual/en/function.stream-wrapper-restore.php
 * @param string $protocol 
 * @return bool true on success or false on failure
 */
function stream_wrapper_restore (string $protocol) {}

/**
 * Retrieve list of registered streams
 * @link http://www.php.net/manual/en/function.stream-get-wrappers.php
 * @return array an indexed array containing the name of all stream wrappers
 * available on the running system.
 */
function stream_get_wrappers () {}

/**
 * Retrieve list of registered socket transports
 * @link http://www.php.net/manual/en/function.stream-get-transports.php
 * @return array an indexed array of socket transports names.
 */
function stream_get_transports () {}

/**
 * Resolve filename against the include path
 * @link http://www.php.net/manual/en/function.stream-resolve-include-path.php
 * @param string $filename The filename to resolve.
 * @param resource $context [optional] A valid context resource created with stream_context_create.
 * @return string a string containing the resolved absolute filename, or false on failure.
 */
function stream_resolve_include_path (string $filename, $context = null) {}

/**
 * Checks if a stream is a local stream
 * @link http://www.php.net/manual/en/function.stream-is-local.php
 * @param mixed $stream_or_url The stream resource or URL to check.
 * @return bool true on success or false on failure
 */
function stream_is_local ($stream_or_url) {}

/**
 * Fetches all the headers sent by the server in response to an HTTP request
 * @link http://www.php.net/manual/en/function.get-headers.php
 * @param string $url The target URL.
 * @param int $format [optional] If the optional format parameter is set to non-zero,
 * get_headers parses the response and sets the 
 * array's keys.
 * @param resource $context [optional] A valid context resource created with
 * stream_context_create.
 * @return array an indexed or associative array with the headers, or false on
 * failure.
 */
function get_headers (string $url, int $format = null, $context = null) {}

/**
 * Set timeout period on a stream
 * @link http://www.php.net/manual/en/function.stream-set-timeout.php
 * @param resource $stream The target stream.
 * @param int $seconds The seconds part of the timeout to be set.
 * @param int $microseconds [optional] The microseconds part of the timeout to be set.
 * @return bool true on success or false on failure
 */
function stream_set_timeout ($stream, int $seconds, int $microseconds = null) {}

/**
 * Alias: stream_set_timeout
 * @link http://www.php.net/manual/en/function.socket-set-timeout.php
 * @param mixed $stream
 * @param mixed $seconds
 * @param mixed $microseconds [optional]
 */
function socket_set_timeout ($stream, $seconds, $microseconds = null) {}

/**
 * Alias: stream_get_meta_data
 * @link http://www.php.net/manual/en/function.socket-get-status.php
 * @param mixed $fp
 */
function socket_get_status ($fp) {}

/**
 * Returns canonicalized absolute pathname
 * @link http://www.php.net/manual/en/function.realpath.php
 * @param string $path <p>
 * The path being checked.
 * <p>
 * Whilst a path must be supplied, the value can be an empty string.
 * In this case, the value is interpreted as the current directory.
 * </p>
 * </p>
 * @return string the canonicalized absolute pathname on success. The resulting path 
 * will have no symbolic link, /./ or /../ components. Trailing delimiters,
 * such as \ and /, are also removed.
 * <p>
 * realpath returns false on failure, e.g. if
 * the file does not exist.
 * </p>
 * <p>
 * The running script must have executable permissions on all directories in
 * the hierarchy, otherwise realpath will return
 * false.
 * </p>
 * <p>
 * For case-insensitive filesystems realpath may or may
 * not normalize the character case.
 * </p>
 * <p>
 * The function realpath will not work for a file which
 * is inside a Phar as such path would be a virtual path, not a real one.
 * </p>
 */
function realpath (string $path) {}

/**
 * Match filename against a pattern
 * @link http://www.php.net/manual/en/function.fnmatch.php
 * @param string $pattern The shell wildcard pattern.
 * @param string $string <p>
 * The tested string. This function is especially useful for filenames,
 * but may also be used on regular strings.
 * </p>
 * <p>
 * The average user may be used to shell patterns or at least in their
 * simplest form to '?' and '&#42;'
 * wildcards so using fnmatch instead of
 * preg_match for
 * frontend search expression input may be way more convenient for
 * non-programming users.
 * </p>
 * @param int $flags [optional] The value of flags can be any combination of 
 * the following flags, joined with the
 * binary OR (|) operator.
 * <table>
 * A list of possible flags for fnmatch
 * <table>
 * <tr valign="top">
 * <td>Flag</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>FNM_NOESCAPE</td>
 * <td>
 * Disable backslash escaping.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>FNM_PATHNAME</td>
 * <td>
 * Slash in string only matches slash in the given pattern.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>FNM_PERIOD</td>
 * <td>
 * Leading period in string must be exactly matched by period in the given pattern.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>FNM_CASEFOLD</td>
 * <td>
 * Caseless match. Part of the GNU extension.
 * </td>
 * </tr>
 * </table>
 * </table>
 * @return bool true if there is a match, false otherwise.
 */
function fnmatch (string $pattern, string $string, int $flags = null) {}

/**
 * Open Internet or Unix domain socket connection
 * @link http://www.php.net/manual/en/function.fsockopen.php
 * @param string $hostname If OpenSSL support is
 * installed, you may prefix the hostname
 * with either ssl:// or tls:// to
 * use an SSL or TLS client connection over TCP/IP to connect to the
 * remote host.
 * @param int $port [optional] The port number. This can be omitted and skipped with
 * -1 for transports that do not use ports, such as
 * unix://.
 * @param int $errno [optional] <p>
 * If provided, holds the system level error number that occurred in the
 * system-level connect() call.
 * </p>
 * <p>
 * If the value returned in errno is
 * 0 and the function returned false, it is an
 * indication that the error occurred before the 
 * connect() call. This is most likely due to a
 * problem initializing the socket.
 * </p>
 * @param string $errstr [optional] The error message as a string.
 * @param float $timeout [optional] <p>
 * The connection timeout, in seconds.
 * </p>
 * <p>
 * If you need to set a timeout for reading/writing data over the
 * socket, use stream_set_timeout, as the 
 * timeout parameter to
 * fsockopen only applies while connecting the
 * socket.
 * </p>
 * @return resource fsockopen returns a file pointer which may be used
 * together with the other file functions (such as
 * fgets, fgetss,
 * fwrite, fclose, and
 * feof). If the call fails, it will return false
 */
function fsockopen (string $hostname, int $port = null, int &$errno = null, string &$errstr = null, float $timeout = null) {}

/**
 * Open persistent Internet or Unix domain socket connection
 * @link http://www.php.net/manual/en/function.pfsockopen.php
 * @param string $hostname 
 * @param int $port [optional] 
 * @param int $errno [optional] 
 * @param string $errstr [optional] 
 * @param float $timeout [optional] 
 * @return resource 
 */
function pfsockopen (string $hostname, int $port = null, int &$errno = null, string &$errstr = null, float $timeout = null) {}

/**
 * Pack data into binary string
 * @link http://www.php.net/manual/en/function.pack.php
 * @param string $format <p>
 * The format string consists of format codes
 * followed by an optional repeater argument. The repeater argument can
 * be either an integer value or &#42; for repeating to
 * the end of the input data. For a, A, h, H the repeat count specifies
 * how many characters of one data argument are taken, for @ it is the
 * absolute position where to put the next data, for everything else the
 * repeat count specifies how many data arguments are consumed and packed
 * into the resulting binary string.
 * </p>
 * <p>
 * Currently implemented formats are:
 * <table>
 * pack format characters
 * <table>
 * <tr valign="top">
 * <td>Code</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>a</td>
 * <td>NUL-padded string</td>
 * </tr>
 * <tr valign="top">
 * <td>A</td>
 * <td>SPACE-padded string</td></tr>
 * <tr valign="top">
 * <td>h</td>
 * <td>Hex string, low nibble first</td></tr>
 * <tr valign="top">
 * <td>H</td>
 * <td>Hex string, high nibble first</td></tr>
 * <tr valign="top"><td>c</td><td>signed char</td></tr>
 * <tr valign="top">
 * <td>C</td>
 * <td>unsigned char</td></tr>
 * <tr valign="top">
 * <td>s</td>
 * <td>signed short (always 16 bit, machine byte order)</td>
 * </tr>
 * <tr valign="top">
 * <td>S</td>
 * <td>unsigned short (always 16 bit, machine byte order)</td>
 * </tr>
 * <tr valign="top">
 * <td>n</td>
 * <td>unsigned short (always 16 bit, big endian byte order)</td>
 * </tr>
 * <tr valign="top">
 * <td>v</td>
 * <td>unsigned short (always 16 bit, little endian byte order)</td>
 * </tr>
 * <tr valign="top">
 * <td>i</td>
 * <td>signed integer (machine dependent size and byte order)</td>
 * </tr>
 * <tr valign="top">
 * <td>I</td>
 * <td>unsigned integer (machine dependent size and byte order)</td>
 * </tr>
 * <tr valign="top">
 * <td>l</td>
 * <td>signed long (always 32 bit, machine byte order)</td>
 * </tr>
 * <tr valign="top">
 * <td>L</td>
 * <td>unsigned long (always 32 bit, machine byte order)</td>
 * </tr>
 * <tr valign="top">
 * <td>N</td>
 * <td>unsigned long (always 32 bit, big endian byte order)</td>
 * </tr>
 * <tr valign="top">
 * <td>V</td>
 * <td>unsigned long (always 32 bit, little endian byte order)</td>
 * </tr>
 * <tr valign="top">
 * <td>q</td>
 * <td>signed long long (always 64 bit, machine byte order)</td>
 * </tr>
 * <tr valign="top">
 * <td>Q</td>
 * <td>unsigned long long (always 64 bit, machine byte order)</td>
 * </tr>
 * <tr valign="top">
 * <td>J</td>
 * <td>unsigned long long (always 64 bit, big endian byte order)</td>
 * </tr>
 * <tr valign="top">
 * <td>P</td>
 * <td>unsigned long long (always 64 bit, little endian byte order)</td>
 * </tr>
 * <tr valign="top">
 * <td>f</td>
 * <td>float (machine dependent size and representation)</td>
 * </tr>
 * <tr valign="top">
 * <td>g</td>
 * <td>float (machine dependent size, little endian byte order)</td>
 * </tr>
 * <tr valign="top">
 * <td>G</td>
 * <td>float (machine dependent size, big endian byte order)</td>
 * </tr>
 * <tr valign="top">
 * <td>d</td>
 * <td>double (machine dependent size and representation)</td>
 * </tr>
 * <tr valign="top">
 * <td>e</td>
 * <td>double (machine dependent size, little endian byte order)</td>
 * </tr>
 * <tr valign="top">
 * <td>E</td>
 * <td>double (machine dependent size, big endian byte order)</td>
 * </tr>
 * <tr valign="top">
 * <td>x</td>
 * <td>NUL byte</td>
 * </tr>
 * <tr valign="top">
 * <td>X</td>
 * <td>Back up one byte</td>
 * </tr>
 * <tr valign="top">
 * <td>Z</td>
 * <td>NUL-padded string (new in PHP 5.5)</td>
 * </tr>
 * <tr valign="top">
 * <td>@</td>
 * <td>NUL-fill to absolute position</td>
 * </tr>
 * </table>
 * </table>
 * </p>
 * @param mixed $args [optional] 
 * @param mixed $_ [optional] 
 * @return string a binary string containing data.
 */
function pack (string $format, $args = null, $_ = null) {}

/**
 * Unpack data from binary string
 * @link http://www.php.net/manual/en/function.unpack.php
 * @param string $format See pack for an explanation of the format codes.
 * @param string $data The packed data.
 * @param int $offset [optional] The offset to begin unpacking from.
 * @return array an associative array containing unpacked elements of binary
 * string.
 */
function unpack (string $format, string $data, int $offset = null) {}

/**
 * Tells what the user's browser is capable of
 * @link http://www.php.net/manual/en/function.get-browser.php
 * @param string $user_agent [optional] <p>
 * The User Agent to be analyzed. By default, the value of HTTP
 * User-Agent header is used; however, you can alter this (i.e., look up
 * another browser's info) by passing this parameter.
 * </p>
 * <p>
 * You can bypass this parameter with a null value.
 * </p>
 * @param bool $return_array [optional] If set to true, this function will return an array
 * instead of an object.
 * @return mixed The information is returned in an object or an array which will contain
 * various data elements representing, for instance, the browser's major and
 * minor version numbers and ID string; true/false values for features
 * such as frames, JavaScript, and cookies; and so forth.
 * <p>
 * The cookies value simply means that the browser
 * itself is capable of accepting cookies and does not mean the user has
 * enabled the browser to accept cookies or not. The only way to test if
 * cookies are accepted is to set one with setcookie,
 * reload, and check for the value.
 * </p>
 */
function get_browser (string $user_agent = null, bool $return_array = null) {}

/**
 * One-way string hashing
 * @link http://www.php.net/manual/en/function.crypt.php
 * @param string $str <p>
 * The string to be hashed.
 * </p>
 * <p>
 * Using the CRYPT_BLOWFISH algorithm, will result
 * in the str parameter being truncated to a
 * maximum length of 72 characters.
 * </p>
 * @param string $salt [optional] An optional salt string to base the hashing on. If not provided, the
 * behaviour is defined by the algorithm implementation and can lead to
 * unexpected results.
 * @return string the hashed string or a string that is shorter than 13 characters
 * and is guaranteed to differ from the salt on failure.
 */
function crypt (string $str, string $salt = null) {}

/**
 * Open directory handle
 * @link http://www.php.net/manual/en/function.opendir.php
 * @param string $path The directory path that is to be opened
 * @param resource $context [optional] For a description of the context parameter, 
 * refer to the streams section of
 * the manual.
 * @return resource a directory handle resource on success, or
 * false on failure.
 * <p>
 * If path is not a valid directory or the
 * directory can not be opened due to permission restrictions or
 * filesystem errors, opendir returns false and
 * generates a PHP error of level 
 * E_WARNING. You can suppress the error output of
 * opendir by prepending
 * '@' to the
 * front of the function name.
 * </p>
 */
function opendir (string $path, $context = null) {}

/**
 * Close directory handle
 * @link http://www.php.net/manual/en/function.closedir.php
 * @param resource $dir_handle [optional] The directory handle resource previously opened
 * with opendir. If the directory handle is 
 * not specified, the last link opened by opendir 
 * is assumed.
 * @return void 
 */
function closedir ($dir_handle = null) {}

/**
 * Change directory
 * @link http://www.php.net/manual/en/function.chdir.php
 * @param string $directory The new current directory
 * @return bool true on success or false on failure
 */
function chdir (string $directory) {}

/**
 * Gets the current working directory
 * @link http://www.php.net/manual/en/function.getcwd.php
 * @return string the current working directory on success, or false on
 * failure.
 * <p>
 * On some Unix variants, getcwd will return
 * false if any one of the parent directories does not have the
 * readable or search mode set, even if the current directory
 * does. See chmod for more information on
 * modes and permissions.
 * </p>
 */
function getcwd () {}

/**
 * Rewind directory handle
 * @link http://www.php.net/manual/en/function.rewinddir.php
 * @param resource $dir_handle [optional] The directory handle resource previously opened
 * with opendir. If the directory handle is 
 * not specified, the last link opened by opendir 
 * is assumed.
 * @return void null on successreturn.falseforfailure.
 */
function rewinddir ($dir_handle = null) {}

/**
 * Read entry from directory handle
 * @link http://www.php.net/manual/en/function.readdir.php
 * @param resource $dir_handle [optional] The directory handle resource previously opened
 * with opendir. If the directory handle is 
 * not specified, the last link opened by opendir 
 * is assumed.
 * @return string the entry name on success or false on failure.
 */
function readdir ($dir_handle = null) {}

/**
 * Return an instance of the Directory class
 * @link http://www.php.net/manual/en/function.dir.php
 * @param string $directory Directory to open
 * @param resource $context [optional] note.context-support
 * @return Directory an instance of Directory, or null with
 * wrong parameters, or false in case of another error.
 */
function dir (string $directory, $context = null) {}

/**
 * List files and directories inside the specified path
 * @link http://www.php.net/manual/en/function.scandir.php
 * @param string $directory The directory that will be scanned.
 * @param int $sorting_order [optional] By default, the sorted order is alphabetical in ascending order. If
 * the optional sorting_order is set to
 * SCANDIR_SORT_DESCENDING, then the sort order is
 * alphabetical in descending order. If it is set to
 * SCANDIR_SORT_NONE then the result is unsorted.
 * @param resource $context [optional] For a description of the context parameter, 
 * refer to the streams section of
 * the manual.
 * @return array an array of filenames on success, or false on 
 * failure. If directory is not a directory, then 
 * boolean false is returned, and an error of level 
 * E_WARNING is generated.
 */
function scandir (string $directory, int $sorting_order = null, $context = null) {}

/**
 * Find pathnames matching a pattern
 * @link http://www.php.net/manual/en/function.glob.php
 * @param string $pattern The pattern. No tilde expansion or parameter substitution is done.
 * @param int $flags [optional] <p>
 * Valid flags:
 * <p>
 * <br>
 * GLOB_MARK - Adds a slash to each directory returned
 * <br>
 * GLOB_NOSORT - Return files as they appear in the
 * directory (no sorting). When this flag is not used, the pathnames are
 * sorted alphabetically
 * <br>
 * GLOB_NOCHECK - Return the search pattern if no
 * files matching it were found
 * <br>
 * GLOB_NOESCAPE - Backslashes do not quote
 * metacharacters
 * <br>
 * GLOB_BRACE - Expands {a,b,c} to match 'a', 'b',
 * or 'c'
 * <br>
 * GLOB_ONLYDIR - Return only directory entries
 * which match the pattern
 * <br>
 * GLOB_ERR - Stop on read errors (like unreadable
 * directories), by default errors are ignored.
 * </p>
 * </p>
 * @return array an array containing the matched files/directories, an empty array
 * if no file matched or false on error.
 * <p>
 * On some systems it is impossible to distinguish between empty match and an
 * error.
 * </p>
 */
function glob (string $pattern, int $flags = null) {}

/**
 * Gets last access time of file
 * @link http://www.php.net/manual/en/function.fileatime.php
 * @param string $filename Path to the file.
 * @return int the time the file was last accessed, or false on failure.
 * The time is returned as a Unix timestamp.
 */
function fileatime (string $filename) {}

/**
 * Gets inode change time of file
 * @link http://www.php.net/manual/en/function.filectime.php
 * @param string $filename Path to the file.
 * @return int the time the file was last changed, or false on failure.
 * The time is returned as a Unix timestamp.
 */
function filectime (string $filename) {}

/**
 * Gets file group
 * @link http://www.php.net/manual/en/function.filegroup.php
 * @param string $filename Path to the file.
 * @return int the group ID of the file, or false if
 * an error occurs. The group ID is returned in numerical format, use
 * posix_getgrgid to resolve it to a group name.
 * Upon failure, false is returned.
 */
function filegroup (string $filename) {}

/**
 * Gets file inode
 * @link http://www.php.net/manual/en/function.fileinode.php
 * @param string $filename Path to the file.
 * @return int the inode number of the file, or false on failure.
 */
function fileinode (string $filename) {}

/**
 * Gets file modification time
 * @link http://www.php.net/manual/en/function.filemtime.php
 * @param string $filename Path to the file.
 * @return int the time the file was last modified, or false on failure.
 * The time is returned as a Unix timestamp, which is
 * suitable for the date function.
 */
function filemtime (string $filename) {}

/**
 * Gets file owner
 * @link http://www.php.net/manual/en/function.fileowner.php
 * @param string $filename Path to the file.
 * @return int the user ID of the owner of the file, or false on failure.
 * The user ID is returned in numerical format, use
 * posix_getpwuid to resolve it to a username.
 */
function fileowner (string $filename) {}

/**
 * Gets file permissions
 * @link http://www.php.net/manual/en/function.fileperms.php
 * @param string $filename Path to the file.
 * @return int the file's permissions as a numeric mode. Lower bits of this mode
 * are the same as the permissions expected by chmod,
 * however on most platforms the return value will also include information on
 * the type of file given as filename. The examples
 * below demonstrate how to test the return value for specific permissions and
 * file types on POSIX systems, including Linux and macOS.
 * <p>
 * For local files, the specific return value is that of the
 * st_mode member of the structure returned by the C
 * library's stat function. Exactly which bits are set
 * can vary from platform to platform, and looking up your specific platform's
 * documentation is recommended if parsing the non-permission bits of the
 * return value is required.
 * </p>
 */
function fileperms (string $filename) {}

/**
 * Gets file size
 * @link http://www.php.net/manual/en/function.filesize.php
 * @param string $filename Path to the file.
 * @return int the size of the file in bytes, or false (and generates an error
 * of level E_WARNING) in case of an error.
 */
function filesize (string $filename) {}

/**
 * Gets file type
 * @link http://www.php.net/manual/en/function.filetype.php
 * @param string $filename Path to the file.
 * @return string the type of the file. Possible values are fifo, char,
 * dir, block, link, file, socket and unknown.
 * <p>
 * Returns false if an error occurs. filetype will also
 * produce an E_NOTICE message if the stat call fails
 * or if the file type is unknown.
 * </p>
 */
function filetype (string $filename) {}

/**
 * Checks whether a file or directory exists
 * @link http://www.php.net/manual/en/function.file-exists.php
 * @param string $filename <p>
 * Path to the file or directory.
 * </p>
 * <p>
 * On windows, use //computername/share/filename or
 * \\computername\share\filename to check files on
 * network shares.
 * </p>
 * @return bool true if the file or directory specified by
 * filename exists; false otherwise.
 * <p>
 * This function will return false for symlinks pointing to non-existing
 * files.
 * </p>
 * <p>
 * This function returns false for files inaccessible due to safe mode restrictions. However these
 * files still can be included if
 * they are located in safe_mode_include_dir.
 * </p>
 * <p>
 * The check is done using the real UID/GID instead of the effective one.
 * </p>
 */
function file_exists (string $filename) {}

/**
 * Tells whether the filename is writable
 * @link http://www.php.net/manual/en/function.is-writable.php
 * @param string $filename The filename being checked.
 * @return bool true if the filename exists and is
 * writable.
 */
function is_writable (string $filename) {}

/**
 * Alias: is_writable
 * @link http://www.php.net/manual/en/function.is-writeable.php
 * @param mixed $filename
 */
function is_writeable ($filename) {}

/**
 * Tells whether a file exists and is readable
 * @link http://www.php.net/manual/en/function.is-readable.php
 * @param string $filename Path to the file.
 * @return bool true if the file or directory specified by
 * filename exists and is readable, false otherwise.
 */
function is_readable (string $filename) {}

/**
 * Tells whether the filename is executable
 * @link http://www.php.net/manual/en/function.is-executable.php
 * @param string $filename Path to the file.
 * @return bool true if the filename exists and is executable, or false on
 * error.
 */
function is_executable (string $filename) {}

/**
 * Tells whether the filename is a regular file
 * @link http://www.php.net/manual/en/function.is-file.php
 * @param string $filename Path to the file.
 * @return bool true if the filename exists and is a regular file, false
 * otherwise.
 */
function is_file (string $filename) {}

/**
 * Tells whether the filename is a directory
 * @link http://www.php.net/manual/en/function.is-dir.php
 * @param string $filename Path to the file. If filename is a relative
 * filename, it will be checked relative to the current working
 * directory. If filename is a symbolic or hard link 
 * then the link will be resolved and checked. If you have enabled safe mode,
 * or open_basedir further
 * restrictions may apply.
 * @return bool true if the filename exists and is a directory, false
 * otherwise.
 */
function is_dir (string $filename) {}

/**
 * Tells whether the filename is a symbolic link
 * @link http://www.php.net/manual/en/function.is-link.php
 * @param string $filename Path to the file.
 * @return bool true if the filename exists and is a symbolic link, false
 * otherwise.
 */
function is_link (string $filename) {}

/**
 * Gives information about a file
 * @link http://www.php.net/manual/en/function.stat.php
 * @param string $filename Path to the file.
 * @return array <table>
 * stat and fstat result
 * format
 * <table>
 * <tr valign="top">
 * <td>Numeric</td>
 * <td>Associative</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>0</td>
 * <td>dev</td>
 * <td>device number</td>
 * </tr>
 * <tr valign="top">
 * <td>1</td>
 * <td>ino</td>
 * <td>inode number &#42;</td>
 * </tr>
 * <tr valign="top">
 * <td>2</td>
 * <td>mode</td>
 * <td>inode protection mode</td>
 * </tr>
 * <tr valign="top">
 * <td>3</td>
 * <td>nlink</td>
 * <td>number of links</td>
 * </tr>
 * <tr valign="top">
 * <td>4</td>
 * <td>uid</td>
 * <td>userid of owner &#42;</td>
 * </tr>
 * <tr valign="top">
 * <td>5</td>
 * <td>gid</td>
 * <td>groupid of owner &#42;</td>
 * </tr>
 * <tr valign="top">
 * <td>6</td>
 * <td>rdev</td>
 * <td>device type, if inode device</td>
 * </tr>
 * <tr valign="top">
 * <td>7</td>
 * <td>size</td>
 * <td>size in bytes</td>
 * </tr>
 * <tr valign="top">
 * <td>8</td>
 * <td>atime</td>
 * <td>time of last access (Unix timestamp)</td>
 * </tr>
 * <tr valign="top">
 * <td>9</td>
 * <td>mtime</td>
 * <td>time of last modification (Unix timestamp)</td>
 * </tr>
 * <tr valign="top">
 * <td>10</td>
 * <td>ctime</td>
 * <td>time of last inode change (Unix timestamp)</td>
 * </tr>
 * <tr valign="top">
 * <td>11</td>
 * <td>blksize</td>
 * <td>blocksize of filesystem IO &#42;&#42;</td>
 * </tr>
 * <tr valign="top">
 * <td>12</td>
 * <td>blocks</td>
 * <td>number of 512-byte blocks allocated &#42;&#42;</td>
 * </tr>
 * </table>
 * </table>
 * &#42; On Windows this will always be 0.
 * <p>
 * &#42;&#42; Only valid on systems supporting the st_blksize type - other
 * systems (e.g. Windows) return -1.
 * </p>
 * <p>
 * In case of error, stat returns false.
 * </p>
 */
function stat (string $filename) {}

/**
 * Gives information about a file or symbolic link
 * @link http://www.php.net/manual/en/function.lstat.php
 * @param string $filename Path to a file or a symbolic link.
 * @return array See the manual page for stat for information on
 * the structure of the array that lstat returns.
 * This function is identical to the stat function
 * except that if the filename parameter is a symbolic
 * link, the status of the symbolic link is returned, not the status of the
 * file pointed to by the symbolic link.
 */
function lstat (string $filename) {}

/**
 * Changes file owner
 * @link http://www.php.net/manual/en/function.chown.php
 * @param string $filename Path to the file.
 * @param mixed $user A user name or number.
 * @return bool true on success or false on failure
 */
function chown (string $filename, $user) {}

/**
 * Changes file group
 * @link http://www.php.net/manual/en/function.chgrp.php
 * @param string $filename Path to the file.
 * @param mixed $group A group name or number.
 * @return bool true on success or false on failure
 */
function chgrp (string $filename, $group) {}

/**
 * Changes file mode
 * @link http://www.php.net/manual/en/function.chmod.php
 * @param string $filename Path to the file.
 * @param int $mode <p>
 * Note that mode is not automatically
 * assumed to be an octal value, so to ensure the expected operation,
 * you need to prefix mode with a zero (0). 
 * Strings such as "g+w" will not work properly.
 * </p>
 * <p>
 * <pre>
 * <code>&lt;?php
 * chmod(&quot;&#47;somedir&#47;somefile&quot;, 755); &#47;&#47; decimal; probably incorrect
 * chmod(&quot;&#47;somedir&#47;somefile&quot;, &quot;u+rwx,go+rx&quot;); &#47;&#47; string; incorrect
 * chmod(&quot;&#47;somedir&#47;somefile&quot;, 0755); &#47;&#47; octal; correct value of mode
 * ?&gt;</code>
 * </pre>
 * </p>
 * <p>
 * The mode parameter consists of three octal
 * number components specifying access restrictions for the owner,
 * the user group in which the owner is in, and to everybody else in
 * this order. One component can be computed by adding up the needed
 * permissions for that target user base. Number 1 means that you
 * grant execute rights, number 2 means that you make the file
 * writeable, number 4 means that you make the file readable. Add
 * up these numbers to specify needed rights. You can also read more
 * about modes on Unix systems with 'man 1 chmod'
 * and 'man 2 chmod'.
 * </p>
 * <p>
 * <pre>
 * <code>&lt;?php
 * &#47;&#47; Read and write for owner, nothing for everybody else
 * chmod(&quot;&#47;somedir&#47;somefile&quot;, 0600);
 * &#47;&#47; Read and write for owner, read for everybody else
 * chmod(&quot;&#47;somedir&#47;somefile&quot;, 0644);
 * &#47;&#47; Everything for owner, read and execute for others
 * chmod(&quot;&#47;somedir&#47;somefile&quot;, 0755);
 * &#47;&#47; Everything for owner, read and execute for owner's group
 * chmod(&quot;&#47;somedir&#47;somefile&quot;, 0750);
 * ?&gt;</code>
 * </pre>
 * </p>
 * @return bool true on success or false on failure
 */
function chmod (string $filename, int $mode) {}

/**
 * Sets access and modification time of file
 * @link http://www.php.net/manual/en/function.touch.php
 * @param string $filename The name of the file being touched.
 * @param int $time [optional] The touch time. If time is not supplied, 
 * the current system time is used.
 * @param int $atime [optional] If present, the access time of the given filename is set to 
 * the value of atime. Otherwise, it is set to
 * the value passed to the time parameter.
 * If neither are present, the current system time is used.
 * @return bool true on success or false on failure
 */
function touch (string $filename, int $time = null, int $atime = null) {}

/**
 * Clears file status cache
 * @link http://www.php.net/manual/en/function.clearstatcache.php
 * @param bool $clear_realpath_cache [optional] Whether to clear the realpath cache or not.
 * @param string $filename [optional] Clear the realpath and the stat cache for a specific filename only; only
 * used if clear_realpath_cache is true.
 * @return void 
 */
function clearstatcache (bool $clear_realpath_cache = null, string $filename = null) {}

/**
 * Returns the total size of a filesystem or disk partition
 * @link http://www.php.net/manual/en/function.disk-total-space.php
 * @param string $directory A directory of the filesystem or disk partition.
 * @return float the total number of bytes as a float
 * or false on failure.
 */
function disk_total_space (string $directory) {}

/**
 * Returns available space on filesystem or disk partition
 * @link http://www.php.net/manual/en/function.disk-free-space.php
 * @param string $directory <p>
 * A directory of the filesystem or disk partition.
 * </p>
 * <p>
 * Given a file name instead of a directory, the behaviour of the
 * function is unspecified and may differ between operating systems and
 * PHP versions.
 * </p>
 * @return float the number of available bytes as a float
 * or false on failure.
 */
function disk_free_space (string $directory) {}

/**
 * Alias: disk_free_space
 * @link http://www.php.net/manual/en/function.diskfreespace.php
 * @param mixed $path
 */
function diskfreespace ($path) {}

/**
 * Get realpath cache size
 * @link http://www.php.net/manual/en/function.realpath-cache-size.php
 * @return int how much memory realpath cache is using.
 */
function realpath_cache_size () {}

/**
 * Get realpath cache entries
 * @link http://www.php.net/manual/en/function.realpath-cache-get.php
 * @return array an array of realpath cache entries. The keys are original path
 * entries, and the values are arrays of data items, containing the resolved
 * path, expiration date, and other options kept in the cache.
 */
function realpath_cache_get () {}

/**
 * Send mail
 * @link http://www.php.net/manual/en/function.mail.php
 * @param string $to <p>
 * Receiver, or receivers of the mail.
 * </p>
 * <p>
 * The formatting of this string must comply with
 * RFC 2822. Some examples are:
 * <p>
 * user@example.com
 * user@example.com, anotheruser@example.com
 * User &lt;user@example.com&gt;
 * User &lt;user@example.com&gt;, Another User &lt;anotheruser@example.com&gt;
 * </p>
 * </p>
 * @param string $subject <p>
 * Subject of the email to be sent.
 * </p>
 * <p>
 * Subject must satisfy RFC 2047.
 * </p>
 * @param string $message <p>
 * Message to be sent.
 * </p>
 * <p>
 * Each line should be separated with a CRLF (\r\n). Lines should not be
 * larger than 70 characters.
 * </p>
 * <p>
 * (Windows only) When PHP is talking to a SMTP server directly, if a full
 * stop is found on the start of a line, it is removed. To counter-act this,
 * replace these occurrences with a double dot.
 * <pre>
 * <code>&lt;?php
 * $text = str_replace(&quot;\n.&quot;, &quot;\n..&quot;, $text);
 * ?&gt;</code>
 * </pre>
 * </p>
 * @param mixed $additional_headers [optional] <p>
 * String or array to be inserted at the end of the email header.
 * </p>
 * <p>
 * This is typically used to add extra headers (From, Cc, and Bcc).
 * Multiple extra headers should be separated with a CRLF (\r\n).
 * If outside data are used to compose this header, the data should be sanitized
 * so that no unwanted headers could be injected. 
 * </p>
 * <p>
 * If an array is passed, its keys are the header names and its
 * values are the respective header values.
 * </p>
 * <p>
 * Before PHP 5.4.42 and 5.5.27, repectively, additional_headers did not have mail header
 * injection protection. Therefore, users must make sure specified headers
 * are safe and contains headers only. i.e. Never start mail body by putting
 * multiple newlines.
 * </p>
 * <p>
 * When sending mail, the mail must contain
 * a From header. This can be set with the
 * additional_headers parameter, or a default
 * can be set in php.ini.
 * </p>
 * <p>
 * Failing to do this will result in an error
 * message similar to Warning: mail(): "sendmail_from" not
 * set in php.ini or custom "From:" header missing.
 * The From header sets also
 * Return-Path under Windows.
 * </p>
 * <p>
 * If messages are not received, try using a LF (\n) only.
 * Some Unix mail transfer agents (most notably
 * qmail) replace LF by CRLF
 * automatically (which leads to doubling CR if CRLF is used).
 * This should be a last resort, as it does not comply with
 * RFC 2822.
 * </p>
 * @param string $additional_parameters [optional] <p>
 * The additional_parameters parameter
 * can be used to pass additional flags as command line options to the
 * program configured to be used when sending mail, as defined by the
 * sendmail_path configuration setting. For example,
 * this can be used to set the envelope sender address when using
 * sendmail with the -f sendmail option.
 * </p>
 * <p>
 * This parameter is escaped by escapeshellcmd internally
 * to prevent command execution. escapeshellcmd prevents
 * command execution, but allows to add additional parameters. For security reasons,
 * it is recommended for the user to sanitize this parameter to avoid adding unwanted
 * parameters to the shell command.
 * </p>
 * <p>
 * Since escapeshellcmd is applied automatically, some characters
 * that are allowed as email addresses by internet RFCs cannot be used. 
 * mail can not allow such characters, so in programs where the use of
 * such characters is required, alternative means of sending emails (such as using a framework
 * or a library) is recommended. 
 * </p>
 * <p>
 * The user that the webserver runs as should be added as a trusted user to the
 * sendmail configuration to prevent a 'X-Warning' header from being added
 * to the message when the envelope sender (-f) is set using this method.
 * For sendmail users, this file is /etc/mail/trusted-users.
 * </p>
 * @return bool true if the mail was successfully accepted for delivery, false otherwise.
 * <p>
 * It is important to note that just because the mail was accepted for delivery,
 * it does NOT mean the mail will actually reach the intended destination.
 * </p>
 */
function mail (string $to, string $subject, string $message, $additional_headers = null, string $additional_parameters = null) {}

/**
 * Calculate the hash value needed by EZMLM
 * @link http://www.php.net/manual/en/function.ezmlm-hash.php
 * @param string $addr The email address that's being hashed.
 * @return int The hash value of addr.
 */
function ezmlm_hash (string $addr) {}

/**
 * Open connection to system logger
 * @link http://www.php.net/manual/en/function.openlog.php
 * @param string $ident The string ident is added to each message.
 * @param int $option The option argument is used to indicate
 * what logging options will be used when generating a log message.
 * <table>
 * openlog Options
 * <table>
 * <tr valign="top">
 * <td>Constant</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>LOG_CONS</td>
 * <td>
 * if there is an error while sending data to the system logger,
 * write directly to the system console
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>LOG_NDELAY</td>
 * <td>
 * open the connection to the logger immediately
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>LOG_ODELAY</td>
 * <td>
 * (default) delay opening the connection until the first
 * message is logged
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>LOG_PERROR</td>
 * <td>print log message also to standard error</td>
 * </tr>
 * <tr valign="top">
 * <td>LOG_PID</td>
 * <td>include PID with each message</td>
 * </tr>
 * </table>
 * </table>
 * You can use one or more of these options. When using multiple options
 * you need to OR them, i.e. to open the connection
 * immediately, write to the console and include the PID in each message,
 * you will use: LOG_CONS | LOG_NDELAY | LOG_PID
 * @param int $facility <p>
 * The facility argument is used to specify what
 * type of program is logging the message. This allows you to specify
 * (in your machine's syslog configuration) how messages coming from
 * different facilities will be handled.
 * <table>
 * openlog Facilities
 * <table>
 * <tr valign="top">
 * <td>Constant</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>LOG_AUTH</td>
 * <td>
 * security/authorization messages (use 
 * LOG_AUTHPRIV instead
 * in systems where that constant is defined)
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>LOG_AUTHPRIV</td>
 * <td>security/authorization messages (private)</td>
 * </tr>
 * <tr valign="top">
 * <td>LOG_CRON</td>
 * <td>clock daemon (cron and at)</td>
 * </tr>
 * <tr valign="top">
 * <td>LOG_DAEMON</td>
 * <td>other system daemons</td>
 * </tr>
 * <tr valign="top">
 * <td>LOG_KERN</td>
 * <td>kernel messages</td>
 * </tr>
 * <tr valign="top">
 * <td>LOG_LOCAL0 ... LOG_LOCAL7</td>
 * <td>reserved for local use, these are not available in Windows</td>
 * </tr>
 * <tr valign="top">
 * <td>LOG_LPR</td>
 * <td>line printer subsystem</td>
 * </tr>
 * <tr valign="top">
 * <td>LOG_MAIL</td>
 * <td>mail subsystem</td>
 * </tr>
 * <tr valign="top">
 * <td>LOG_NEWS</td>
 * <td>USENET news subsystem</td>
 * </tr>
 * <tr valign="top">
 * <td>LOG_SYSLOG</td>
 * <td>messages generated internally by syslogd</td>
 * </tr>
 * <tr valign="top">
 * <td>LOG_USER</td>
 * <td>generic user-level messages</td>
 * </tr>
 * <tr valign="top">
 * <td>LOG_UUCP</td>
 * <td>UUCP subsystem</td>
 * </tr>
 * </table>
 * </table>
 * </p>
 * <p>
 * LOG_USER is the only valid log type under Windows
 * operating systems
 * </p>
 * @return bool true on success or false on failure
 */
function openlog (string $ident, int $option, int $facility) {}

/**
 * Generate a system log message
 * @link http://www.php.net/manual/en/function.syslog.php
 * @param int $priority priority is a combination of the facility and
 * the level. Possible values are:
 * <table>
 * syslog Priorities (in descending order)
 * <table>
 * <tr valign="top">
 * <td>Constant</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>LOG_EMERG</td>
 * <td>system is unusable</td>
 * </tr>
 * <tr valign="top">
 * <td>LOG_ALERT</td>
 * <td>action must be taken immediately</td>
 * </tr>
 * <tr valign="top">
 * <td>LOG_CRIT</td>
 * <td>critical conditions</td>
 * </tr>
 * <tr valign="top">
 * <td>LOG_ERR</td>
 * <td>error conditions</td>
 * </tr>
 * <tr valign="top">
 * <td>LOG_WARNING</td>
 * <td>warning conditions</td>
 * </tr>
 * <tr valign="top">
 * <td>LOG_NOTICE</td>
 * <td>normal, but significant, condition</td>
 * </tr>
 * <tr valign="top">
 * <td>LOG_INFO</td>
 * <td>informational message</td>
 * </tr>
 * <tr valign="top">
 * <td>LOG_DEBUG</td>
 * <td>debug-level message</td>
 * </tr>
 * </table>
 * </table>
 * @param string $message The message to send, except that the two characters
 * %m will be replaced by the error message string
 * (strerror) corresponding to the present value of
 * errno.
 * @return bool true on success or false on failure
 */
function syslog (int $priority, string $message) {}

/**
 * Close connection to system logger
 * @link http://www.php.net/manual/en/function.closelog.php
 * @return bool true on success or false on failure
 */
function closelog () {}

/**
 * Combined linear congruential generator
 * @link http://www.php.net/manual/en/function.lcg-value.php
 * @return float A pseudo random float value between 0.0 and 1.0, inclusive.
 */
function lcg_value () {}

/**
 * Calculate the metaphone key of a string
 * @link http://www.php.net/manual/en/function.metaphone.php
 * @param string $str The input string.
 * @param int $phonemes [optional] This parameter restricts the returned metaphone key to 
 * phonemes characters in length.
 * The default value of 0 means no restriction.
 * @return string the metaphone key as a string, or false on failure.
 */
function metaphone (string $str, int $phonemes = null) {}

/**
 * Turn on output buffering
 * @link http://www.php.net/manual/en/function.ob-start.php
 * @param callable $output_callback [optional] <p>
 * An optional output_callback function may be
 * specified. This function takes a string as a parameter and should
 * return a string. The function will be called when
 * the output buffer is flushed (sent) or cleaned (with
 * ob_flush, ob_clean or similar
 * function) or when the output buffer
 * is flushed to the browser at the end of the request. When
 * output_callback is called, it will receive the
 * contents of the output buffer as its parameter and is expected to
 * return a new output buffer as a result, which will be sent to the
 * browser. If the output_callback is not a
 * callable function, this function will return false.
 * This is the callback signature:
 * </p>
 * <p>
 * stringhandler
 * stringbuffer
 * intphase
 * <p>
 * buffer
 * <br>
 * Contents of the output buffer.
 * phase
 * <br>
 * Bitmask of PHP_OUTPUT_HANDLER_&#42; constants.
 * </p>
 * </p>
 * <p>
 * If output_callback returns false original
 * input is sent to the browser.
 * </p>
 * <p>
 * The output_callback parameter may be bypassed
 * by passing a null value.
 * </p>
 * <p>
 * ob_end_clean, ob_end_flush,
 * ob_clean, ob_flush and
 * ob_start may not be called from a callback
 * function. If you call them from callback function, the behavior is
 * undefined. If you would like to delete the contents of a buffer,
 * return "" (a null string) from callback function.
 * You can't even call functions using the output buffering functions like
 * print_r($expression, true) or
 * highlight_file($filename, true) from a callback
 * function.
 * </p>
 * <p>
 * ob_gzhandler function exists to
 * facilitate sending gz-encoded data to web browsers that support
 * compressed web pages. ob_gzhandler determines
 * what type of content encoding the browser will accept and will return
 * its output accordingly.
 * </p>
 * @param int $chunk_size [optional] <p>
 * If the optional parameter chunk_size is passed, the
 * buffer will be flushed after any output call which causes the buffer's
 * length to equal or exceed chunk_size. The default
 * value 0 means that the output function will only be
 * called when the output buffer is closed.
 * </p>
 * <p>
 * Prior to PHP 5.4.0, the value 1 was a special case
 * value that set the chunk size to 4096 bytes.
 * </p>
 * @param int $flags [optional] <p>
 * The flags parameter is a bitmask that controls
 * the operations that can be performed on the output buffer. The default
 * is to allow output buffers to be cleaned, flushed and removed, which
 * can be set explicitly via
 * PHP_OUTPUT_HANDLER_CLEANABLE |
 * PHP_OUTPUT_HANDLER_FLUSHABLE |
 * PHP_OUTPUT_HANDLER_REMOVABLE, or
 * PHP_OUTPUT_HANDLER_STDFLAGS as shorthand.
 * </p>
 * <p>
 * Each flag controls access to a set of functions, as described below:
 * <table>
 * <tr valign="top">
 * <td>Constant</td>
 * <td>Functions</td>
 * </tr>
 * <tr valign="top">
 * <td>PHP_OUTPUT_HANDLER_CLEANABLE</td>
 * <td>
 * ob_clean,
 * ob_end_clean, and
 * ob_get_clean.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>PHP_OUTPUT_HANDLER_FLUSHABLE</td>
 * <td>
 * ob_end_flush,
 * ob_flush, and
 * ob_get_flush.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>PHP_OUTPUT_HANDLER_REMOVABLE</td>
 * <td>
 * ob_end_clean,
 * ob_end_flush, and
 * ob_get_flush.
 * </td>
 * </tr>
 * </table>
 * </p>
 * @return bool true on success or false on failure
 */
function ob_start (callable $output_callback = null, int $chunk_size = null, int $flags = null) {}

/**
 * Flush (send) the output buffer
 * @link http://www.php.net/manual/en/function.ob-flush.php
 * @return void 
 */
function ob_flush () {}

/**
 * Clean (erase) the output buffer
 * @link http://www.php.net/manual/en/function.ob-clean.php
 * @return void 
 */
function ob_clean () {}

/**
 * Flush (send) the output buffer and turn off output buffering
 * @link http://www.php.net/manual/en/function.ob-end-flush.php
 * @return bool true on success or false on failure Reasons for failure are first that you called the
 * function without an active buffer or that for some reason a buffer could
 * not be deleted (possible for special buffer).
 */
function ob_end_flush () {}

/**
 * Clean (erase) the output buffer and turn off output buffering
 * @link http://www.php.net/manual/en/function.ob-end-clean.php
 * @return bool true on success or false on failure Reasons for failure are first that you called the
 * function without an active buffer or that for some reason a buffer could
 * not be deleted (possible for special buffer).
 */
function ob_end_clean () {}

/**
 * Flush the output buffer, return it as a string and turn off output buffering
 * @link http://www.php.net/manual/en/function.ob-get-flush.php
 * @return string the output buffer or false if no buffering is active.
 */
function ob_get_flush () {}

/**
 * Get current buffer contents and delete current output buffer
 * @link http://www.php.net/manual/en/function.ob-get-clean.php
 * @return string the contents of the output buffer and end output buffering.
 * If output buffering isn't active then false is returned.
 */
function ob_get_clean () {}

/**
 * Return the length of the output buffer
 * @link http://www.php.net/manual/en/function.ob-get-length.php
 * @return int the length of the output buffer contents, in bytes, or false if no
 * buffering is active.
 */
function ob_get_length () {}

/**
 * Return the nesting level of the output buffering mechanism
 * @link http://www.php.net/manual/en/function.ob-get-level.php
 * @return int the level of nested output buffering handlers or zero if output
 * buffering is not active.
 */
function ob_get_level () {}

/**
 * Get status of output buffers
 * @link http://www.php.net/manual/en/function.ob-get-status.php
 * @param bool $full_status [optional] true to return all active output buffer levels. If false or not
 * set, only the top level output buffer is returned.
 * @return array If called without the full_status parameter
 * or with full_status = false a simple array
 * with the following elements is returned:
 * <pre>
 * Array
 * (
 * [level] => 2
 * [type] => 0
 * [status] => 0
 * [name] => URL-Rewriter
 * [del] => 1
 * )
 * </pre>
 * <p>
 * Simple ob_get_status results
 * KeyValue
 * levelOutput nesting level
 * typePHP_OUTPUT_HANDLER_INTERNAL (0) or PHP_OUTPUT_HANDLER_USER (1)
 * statusOne of PHP_OUTPUT_HANDLER_START (0), PHP_OUTPUT_HANDLER_CONT (1) or PHP_OUTPUT_HANDLER_END (2)
 * nameName of active output handler or ' default output handler' if none is set
 * delErase-flag as set by ob_start
 * </p>
 * <p>
 * If called with full_status = true an array
 * with one element for each active output buffer level is returned.
 * The output level is used as key of the top level array and each array
 * element itself is another array holding status information
 * on one active output level.
 * <pre>
 * Array
 * (
 * [0] => Array
 * (
 * [chunk_size] => 0
 * [size] => 40960
 * [block_size] => 10240
 * [type] => 1
 * [status] => 0
 * [name] => default output handler
 * [del] => 1
 * )
 * [1] => Array
 * (
 * [chunk_size] => 0
 * [size] => 40960
 * [block_size] => 10240
 * [type] => 0
 * [buffer_size] => 0
 * [status] => 0
 * [name] => URL-Rewriter
 * [del] => 1
 * )
 * )
 * </pre>
 * </p>
 * <p>
 * The full output contains these additional elements:
 * <p>
 * Full ob_get_status results
 * KeyValue
 * chunk_sizeChunk size as set by ob_start
 * size...
 * blocksize...
 * </p>
 * </p>
 */
function ob_get_status (bool $full_status = null) {}

/**
 * Return the contents of the output buffer
 * @link http://www.php.net/manual/en/function.ob-get-contents.php
 * @return string This will return the contents of the output buffer or false, if output
 * buffering isn't active.
 */
function ob_get_contents () {}

/**
 * Turn implicit flush on/off
 * @link http://www.php.net/manual/en/function.ob-implicit-flush.php
 * @param int $flag [optional] 1 to turn implicit flushing on, 0 otherwise.
 * @return void 
 */
function ob_implicit_flush (int $flag = null) {}

/**
 * List all output handlers in use
 * @link http://www.php.net/manual/en/function.ob-list-handlers.php
 * @return array This will return an array with the output handlers in use (if any). If
 * output_buffering is enabled or
 * an anonymous function was used with ob_start,
 * ob_list_handlers will return "default output
 * handler".
 */
function ob_list_handlers () {}

/**
 * Sort an array by key
 * @link http://www.php.net/manual/en/function.ksort.php
 * @param array $array The input array.
 * @param int $sort_flags [optional] You may modify the behavior of the sort using the optional
 * parameter sort_flags, for details
 * see sort.
 * @return bool true on success or false on failure
 */
function ksort (array &$array, int $sort_flags = null) {}

/**
 * Sort an array by key in reverse order
 * @link http://www.php.net/manual/en/function.krsort.php
 * @param array $array The input array.
 * @param int $sort_flags [optional] You may modify the behavior of the sort using the optional parameter
 * sort_flags, for details see
 * sort.
 * @return bool true on success or false on failure
 */
function krsort (array &$array, int $sort_flags = null) {}

/**
 * Sort an array using a "natural order" algorithm
 * @link http://www.php.net/manual/en/function.natsort.php
 * @param array $array The input array.
 * @return bool true on success or false on failure
 */
function natsort (array &$array) {}

/**
 * Sort an array using a case insensitive "natural order" algorithm
 * @link http://www.php.net/manual/en/function.natcasesort.php
 * @param array $array The input array.
 * @return bool true on success or false on failure
 */
function natcasesort (array &$array) {}

/**
 * Sort an array and maintain index association
 * @link http://www.php.net/manual/en/function.asort.php
 * @param array $array The input array.
 * @param int $sort_flags [optional] You may modify the behavior of the sort using the optional
 * parameter sort_flags, for details
 * see sort.
 * @return bool true on success or false on failure
 */
function asort (array &$array, int $sort_flags = null) {}

/**
 * Sort an array in reverse order and maintain index association
 * @link http://www.php.net/manual/en/function.arsort.php
 * @param array $array The input array.
 * @param int $sort_flags [optional] You may modify the behavior of the sort using the optional parameter
 * sort_flags, for details see
 * sort.
 * @return bool true on success or false on failure
 */
function arsort (array &$array, int $sort_flags = null) {}

/**
 * Sort an array
 * @link http://www.php.net/manual/en/function.sort.php
 * @param array $array The input array.
 * @param int $sort_flags [optional] <p>
 * The optional second parameter sort_flags
 * may be used to modify the sorting behavior using these values:
 * </p>
 * <p>
 * Sorting type flags:
 * <p>
 * <br>
 * SORT_REGULAR - compare items normally
 * (don't change types)
 * <br>
 * SORT_NUMERIC - compare items numerically
 * <br>
 * SORT_STRING - compare items as strings
 * <br>
 * SORT_LOCALE_STRING - compare items as
 * strings, based on the current locale. It uses the locale,
 * which can be changed using setlocale
 * <br>
 * SORT_NATURAL - compare items as strings
 * using "natural ordering" like natsort
 * <br>
 * SORT_FLAG_CASE - can be combined
 * (bitwise OR) with
 * SORT_STRING or
 * SORT_NATURAL to sort strings case-insensitively
 * </p>
 * </p>
 * @return bool true on success or false on failure
 */
function sort (array &$array, int $sort_flags = null) {}

/**
 * Sort an array in reverse order
 * @link http://www.php.net/manual/en/function.rsort.php
 * @param array $array The input array.
 * @param int $sort_flags [optional] You may modify the behavior of the sort using the optional
 * parameter sort_flags, for details see
 * sort.
 * @return bool true on success or false on failure
 */
function rsort (array &$array, int $sort_flags = null) {}

/**
 * Sort an array by values using a user-defined comparison function
 * @link http://www.php.net/manual/en/function.usort.php
 * @param array $array The input array.
 * @param callable $value_compare_func <p>
 * return.callbacksort
 * </p>
 * callback.cmp
 * <p>
 * Returning non-integer values from the comparison
 * function, such as float, will result in an internal cast to
 * integer of the callback's return value. So values such as
 * 0.99 and 0.1 will both be cast to an integer value of 0, which will
 * compare such values as equal.
 * </p>
 * @return bool true on success or false on failure
 */
function usort (array &$array, callable $value_compare_func) {}

/**
 * Sort an array with a user-defined comparison function and maintain index association
 * @link http://www.php.net/manual/en/function.uasort.php
 * @param array $array The input array.
 * @param callable $value_compare_func See usort and uksort for
 * examples of user-defined comparison functions.
 * @return bool true on success or false on failure
 */
function uasort (array &$array, callable $value_compare_func) {}

/**
 * Sort an array by keys using a user-defined comparison function
 * @link http://www.php.net/manual/en/function.uksort.php
 * @param array $array The input array.
 * @param callable $key_compare_func <p>
 * return.callbacksort
 * </p>
 * callback.cmp
 * @return bool true on success or false on failure
 */
function uksort (array &$array, callable $key_compare_func) {}

/**
 * Shuffle an array
 * @link http://www.php.net/manual/en/function.shuffle.php
 * @param array $array The array.
 * @return bool true on success or false on failure
 */
function shuffle (array &$array) {}

/**
 * Apply a user supplied function to every member of an array
 * @link http://www.php.net/manual/en/function.array-walk.php
 * @param array $array The input array.
 * @param callable $callback <p>
 * Typically, callback takes on two parameters.
 * The array parameter's value being the first, and
 * the key/index second.
 * </p>
 * <p>
 * If callback needs to be working with the
 * actual values of the array, specify the first parameter of
 * callback as a
 * reference. Then,
 * any changes made to those elements will be made in the
 * original array itself.
 * </p>
 * <p>
 * Many internal functions (for example strtolower)
 * will throw a warning if more than the expected number of argument
 * are passed in and are not usable directly as a
 * callback.
 * </p>
 * <p>
 * Only the values of the array may potentially be
 * changed; its structure cannot be altered, i.e., the programmer cannot
 * add, unset or reorder elements. If the callback does not respect this
 * requirement, the behavior of this function is undefined, and 
 * unpredictable.
 * </p>
 * @param mixed $userdata [optional] If the optional userdata parameter is supplied,
 * it will be passed as the third parameter to the
 * callback.
 * @return bool true.
 */
function array_walk (array &$array, callable $callback, $userdata = null) {}

/**
 * Apply a user function recursively to every member of an array
 * @link http://www.php.net/manual/en/function.array-walk-recursive.php
 * @param array $array The input array.
 * @param callable $callback <p>
 * Typically, callback takes on two parameters.
 * The array parameter's value being the first, and
 * the key/index second.
 * </p>
 * <p>
 * If callback needs to be working with the
 * actual values of the array, specify the first parameter of
 * callback as a
 * reference. Then,
 * any changes made to those elements will be made in the
 * original array itself.
 * </p>
 * @param mixed $userdata [optional] If the optional userdata parameter is supplied,
 * it will be passed as the third parameter to the
 * callback.
 * @return bool true on success or false on failure
 */
function array_walk_recursive (array &$array, callable $callback, $userdata = null) {}

/**
 * Count all elements in an array, or something in an object
 * @link http://www.php.net/manual/en/function.count.php
 * @param mixed $array_or_countable An array or Countable object.
 * @param int $mode [optional] <p>
 * If the optional mode parameter is set to
 * COUNT_RECURSIVE (or 1), count
 * will recursively count the array. This is particularly useful for
 * counting all the elements of a multidimensional array.
 * </p>
 * <p>
 * count can detect recursion to avoid an infinite
 * loop, but will emit an E_WARNING every time it
 * does (in case the array contains itself more than once) and return a
 * count higher than may be expected.
 * </p>
 * @return int the number of elements in array_or_countable.
 * When the parameter is neither an array nor an object with
 * implemented Countable interface,
 * 1 will be returned.
 * There is one exception, if array_or_countable is null,
 * 0 will be returned.
 */
function count ($array_or_countable, int $mode = null) {}

/**
 * Set the internal pointer of an array to its last element
 * @link http://www.php.net/manual/en/function.end.php
 * @param array $array The array. This array is passed by reference because it is modified by
 * the function. This means you must pass it a real variable and not
 * a function returning an array because only actual variables may be
 * passed by reference.
 * @return mixed the value of the last element or false for empty array.
 */
function end (array &$array) {}

/**
 * Rewind the internal array pointer
 * @link http://www.php.net/manual/en/function.prev.php
 * @param array $array The input array.
 * @return mixed the array value in the previous place that's pointed to by
 * the internal array pointer, or false if there are no more
 * elements.
 */
function prev (array &$array) {}

/**
 * Advance the internal pointer of an array
 * @link http://www.php.net/manual/en/function.next.php
 * @param array $array The array being affected.
 * @return mixed the array value in the next place that's pointed to by the
 * internal array pointer, or false if there are no more elements.
 */
function next (array &$array) {}

/**
 * Set the internal pointer of an array to its first element
 * @link http://www.php.net/manual/en/function.reset.php
 * @param array $array The input array.
 * @return mixed the value of the first array element, or false if the array is
 * empty.
 */
function reset (array &$array) {}

/**
 * Return the current element in an array
 * @link http://www.php.net/manual/en/function.current.php
 * @param array $array The array.
 * @return mixed The current function simply returns the
 * value of the array element that's currently being pointed to by the
 * internal pointer. It does not move the pointer in any way. If the
 * internal pointer points beyond the end of the elements list or the array is 
 * empty, current returns false.
 */
function current (array $array) {}

/**
 * Fetch a key from an array
 * @link http://www.php.net/manual/en/function.key.php
 * @param array $array The array.
 * @return mixed The key function simply returns the
 * key of the array element that's currently being pointed to by the
 * internal pointer. It does not move the pointer in any way. If the
 * internal pointer points beyond the end of the elements list or the array is 
 * empty, key returns null.
 */
function key (array $array) {}

/**
 * Find lowest value
 * @link http://www.php.net/manual/en/function.min.php
 * @param array $values An array containing the values.
 * @return mixed min returns the parameter value considered "lowest" according to standard
 * comparisons. If multiple values of different types evaluate as equal (e.g. 0
 * and 'abc') the first provided to the function will be returned.
 * <p>
 * If an empty array is passed, then false will be returned and an
 * E_WARNING error will be emitted.
 * </p>
 */
function min (array $values) {}

/**
 * Find highest value
 * @link http://www.php.net/manual/en/function.max.php
 * @param array $values An array containing the values.
 * @return mixed max returns the parameter value considered "highest" according to standard
 * comparisons. If multiple values of different types evaluate as equal (e.g. 0
 * and 'abc') the first provided to the function will be returned.
 * <p>
 * If an empty array is passed, then false will be returned and an
 * E_WARNING error will be emitted.
 * </p>
 */
function max (array $values) {}

/**
 * Checks if a value exists in an array
 * @link http://www.php.net/manual/en/function.in-array.php
 * @param mixed $needle <p>
 * The searched value.
 * </p>
 * <p>
 * If needle is a string, the comparison is done
 * in a case-sensitive manner.
 * </p>
 * @param array $haystack The array.
 * @param bool $strict [optional] If the third parameter strict is set to true
 * then the in_array function will also check the
 * types of the
 * needle in the haystack.
 * @return bool true if needle is found in the array,
 * false otherwise.
 */
function in_array ($needle, array $haystack, bool $strict = null) {}

/**
 * Searches the array for a given value and returns the first corresponding key if successful
 * @link http://www.php.net/manual/en/function.array-search.php
 * @param mixed $needle <p>
 * The searched value.
 * </p>
 * <p>
 * If needle is a string, the comparison is done
 * in a case-sensitive manner.
 * </p>
 * @param array $haystack The array.
 * @param bool $strict [optional] If the third parameter strict is set to true
 * then the array_search function will search for
 * identical elements in the
 * haystack. This means it will also perform a
 * strict type comparison of the
 * needle in the haystack,
 * and objects must be the same instance.
 * @return mixed the key for needle if it is found in the
 * array, false otherwise.
 * <p>
 * If needle is found in haystack
 * more than once, the first matching key is returned. To return the keys for
 * all matching values, use array_keys with the optional
 * search_value parameter instead.
 * </p>
 */
function array_search ($needle, array $haystack, bool $strict = null) {}

/**
 * Import variables into the current symbol table from an array
 * @link http://www.php.net/manual/en/function.extract.php
 * @param array $array <p>
 * An associative array. This function treats keys as variable names and
 * values as variable values. For each key/value pair it will create a
 * variable in the current symbol table, subject to
 * flags and prefix parameters.
 * </p>
 * <p>
 * You must use an associative array; a numerically indexed array
 * will not produce results unless you use EXTR_PREFIX_ALL or
 * EXTR_PREFIX_INVALID.
 * </p>
 * @param int $flags [optional] <p>
 * The way invalid/numeric keys and collisions are treated is determined
 * by the extraction flags. It can be one of the
 * following values:
 * <p>
 * EXTR_OVERWRITE
 * <br>
 * If there is a collision, overwrite the existing variable.
 * EXTR_SKIP
 * <br>
 * If there is a collision, don't overwrite the existing
 * variable.
 * EXTR_PREFIX_SAME
 * <br>
 * If there is a collision, prefix the variable name with
 * prefix.
 * EXTR_PREFIX_ALL
 * <br>
 * Prefix all variable names with
 * prefix.
 * EXTR_PREFIX_INVALID
 * <br>
 * Only prefix invalid/numeric variable names with
 * prefix.
 * EXTR_IF_EXISTS
 * <br>
 * Only overwrite the variable if it already exists in the
 * current symbol table, otherwise do nothing. This is useful
 * for defining a list of valid variables and then extracting
 * only those variables you have defined out of
 * $_REQUEST, for example.
 * EXTR_PREFIX_IF_EXISTS
 * <br>
 * Only create prefixed variable names if the non-prefixed version
 * of the same variable exists in the current symbol table.
 * EXTR_REFS
 * <br>
 * Extracts variables as references. This effectively means that the
 * values of the imported variables are still referencing the values of
 * the array parameter. You can use this flag
 * on its own or combine it with any other flag by OR'ing the
 * flags.
 * </p>
 * </p>
 * <p>
 * If flags is not specified, it is
 * assumed to be EXTR_OVERWRITE.
 * </p>
 * @param string $prefix [optional] Note that prefix is only required if
 * flags is EXTR_PREFIX_SAME,
 * EXTR_PREFIX_ALL, EXTR_PREFIX_INVALID
 * or EXTR_PREFIX_IF_EXISTS. If
 * the prefixed result is not a valid variable name, it is not
 * imported into the symbol table. Prefixes are automatically separated from
 * the array key by an underscore character.
 * @return int the number of variables successfully imported into the symbol
 * table.
 */
function extract (array &$array, int $flags = null, string $prefix = null) {}

/**
 * Create array containing variables and their values
 * @link http://www.php.net/manual/en/function.compact.php
 * @param mixed $varname1 compact takes a variable number of parameters.
 * Each parameter can be either a string containing the name of the
 * variable, or an array of variable names. The array can contain other
 * arrays of variable names inside it; compact
 * handles it recursively.
 * @param mixed $_ [optional] 
 * @return array the output array with all the variables added to it.
 */
function compact ($varname1, $_ = null) {}

/**
 * Fill an array with values
 * @link http://www.php.net/manual/en/function.array-fill.php
 * @param int $start_index <p>
 * The first index of the returned array.
 * </p>
 * <p>
 * If start_index is negative, 
 * the first index of the returned array will be 
 * start_index and the following 
 * indices will start from zero 
 * (see example).
 * </p>
 * @param int $num Number of elements to insert.
 * Must be greater than or equal to zero.
 * @param mixed $value Value to use for filling
 * @return array the filled array
 */
function array_fill (int $start_index, int $num, $value) {}

/**
 * Fill an array with values, specifying keys
 * @link http://www.php.net/manual/en/function.array-fill-keys.php
 * @param array $keys Array of values that will be used as keys. Illegal values
 * for key will be converted to string.
 * @param mixed $value Value to use for filling
 * @return array the filled array
 */
function array_fill_keys (array $keys, $value) {}

/**
 * Create an array containing a range of elements
 * @link http://www.php.net/manual/en/function.range.php
 * @param mixed $start First value of the sequence.
 * @param mixed $end The sequence is ended upon reaching the
 * end value.
 * @param number $step [optional] If a step value is given, it will be used as the
 * increment between elements in the sequence. step
 * should be given as a positive number. If not specified,
 * step will default to 1.
 * @return array an array of elements from start to
 * end, inclusive.
 */
function range ($start, $end, $step = null) {}

/**
 * Sort multiple or multi-dimensional arrays
 * @link http://www.php.net/manual/en/function.array-multisort.php
 * @param array $array1 An array being sorted.
 * @param mixed $array1_sort_order [optional] <p>
 * The order used to sort the previous array argument. Either
 * SORT_ASC to sort ascendingly or SORT_DESC
 * to sort descendingly.
 * </p>
 * <p>
 * This argument can be swapped with array1_sort_flags
 * or omitted entirely, in which case SORT_ASC is assumed.
 * </p>
 * @param mixed $array1_sort_flags [optional] <p>
 * Sort options for the previous array argument:
 * </p>
 * <p>
 * Sorting type flags:
 * <p>
 * <br>
 * SORT_REGULAR - compare items normally
 * (don't change types)
 * <br>
 * SORT_NUMERIC - compare items numerically
 * <br>
 * SORT_STRING - compare items as strings
 * <br>
 * SORT_LOCALE_STRING - compare items as
 * strings, based on the current locale. It uses the locale,
 * which can be changed using setlocale
 * <br>
 * SORT_NATURAL - compare items as strings
 * using "natural ordering" like natsort
 * <br>
 * SORT_FLAG_CASE - can be combined
 * (bitwise OR) with
 * SORT_STRING or
 * SORT_NATURAL to sort strings case-insensitively
 * </p>
 * </p>
 * <p>
 * This argument can be swapped with array1_sort_order
 * or omitted entirely, in which case SORT_REGULAR is assumed.
 * </p>
 * @param mixed $_ [optional] 
 * @return bool true on success or false on failure
 */
function array_multisort (array &$array1, $array1_sort_order = null, $array1_sort_flags = null, $_ = null) {}

/**
 * Push one or more elements onto the end of array
 * @link http://www.php.net/manual/en/function.array-push.php
 * @param array $array The input array.
 * @param mixed $_ [optional] 
 * @return int the new number of elements in the array.
 */
function array_push (array &$array, $_ = null) {}

/**
 * Pop the element off the end of array
 * @link http://www.php.net/manual/en/function.array-pop.php
 * @param array $array The array to get the value from.
 * @return mixed the value of the last element of array.
 * If array is empty (or is not an array),
 * null will be returned.
 */
function array_pop (array &$array) {}

/**
 * Shift an element off the beginning of array
 * @link http://www.php.net/manual/en/function.array-shift.php
 * @param array $array The input array.
 * @return mixed the shifted value, or null if array is
 * empty or is not an array.
 */
function array_shift (array &$array) {}

/**
 * Prepend one or more elements to the beginning of an array
 * @link http://www.php.net/manual/en/function.array-unshift.php
 * @param array $array The input array.
 * @param mixed $_ [optional] 
 * @return int the new number of elements in the array.
 */
function array_unshift (array &$array, $_ = null) {}

/**
 * Remove a portion of the array and replace it with something else
 * @link http://www.php.net/manual/en/function.array-splice.php
 * @param array $input The input array.
 * @param int $offset If offset is positive then the start of removed
 * portion is at that offset from the beginning of the
 * input array. If offset
 * is negative then it starts that far from the end of the
 * input array.
 * @param int $length [optional] If length is omitted, removes everything
 * from offset to the end of the array. If
 * length is specified and is positive, then
 * that many elements will be removed. If
 * length is specified and is negative then
 * the end of the removed portion will be that many elements from
 * the end of the array. If length is
 * specified and is zero, no elements will be removed.
 * Tip: to remove everything from
 * offset to the end of the array when
 * replacement is also specified, use
 * count($input) for
 * length.
 * @param mixed $replacement [optional] <p>
 * If replacement array is specified, then the
 * removed elements are replaced with elements from this array.
 * </p>
 * <p>
 * If offset and length
 * are such that nothing is removed, then the elements from the
 * replacement array are inserted in the place
 * specified by the offset. Note that keys in
 * replacement array are not preserved.
 * </p>
 * <p>
 * If replacement is just one element it is
 * not necessary to put array()
 * around it, unless the element is an array itself, an object or null.
 * </p>
 * @return array an array consisting of the extracted elements.
 */
function array_splice (array &$input, int $offset, int $length = null, $replacement = null) {}

/**
 * Extract a slice of the array
 * @link http://www.php.net/manual/en/function.array-slice.php
 * @param array $array The input array.
 * @param int $offset If offset is non-negative, the sequence will
 * start at that offset in the array. If
 * offset is negative, the sequence will
 * start that far from the end of the array.
 * Note that the offset denotes the position in the
 * array, not the key.
 * @param int $length [optional] If length is given and is positive, then
 * the sequence will have up to that many elements in it. If the array
 * is shorter than the length, then only the
 * available array elements will be present. If
 * length is given and is negative then the
 * sequence will stop that many elements from the end of the
 * array. If it is omitted, then the sequence will have everything
 * from offset up until the end of the
 * array.
 * @param bool $preserve_keys [optional] Note that array_slice will reorder and reset the
 * integer array indices by default. You can change this behaviour by setting
 * preserve_keys to true.
 * String keys are always preserved, regardless of this parameter.
 * @return array the slice. If the offset is larger than the size of the array then returns an empty array.
 */
function array_slice (array $array, int $offset, int $length = null, bool $preserve_keys = null) {}

/**
 * Merge one or more arrays
 * @link http://www.php.net/manual/en/function.array-merge.php
 * @param array $array1 Initial array to merge.
 * @param array $_ [optional] 
 * @return array the resulting array.
 */
function array_merge (array $array1, array $_ = null) {}

/**
 * Merge one or more arrays recursively
 * @link http://www.php.net/manual/en/function.array-merge-recursive.php
 * @param array $array1 Initial array to merge.
 * @param array $_ [optional] 
 * @return array An array of values resulted from merging the arguments together.
 */
function array_merge_recursive (array $array1, array $_ = null) {}

/**
 * Replaces elements from passed arrays into the first array
 * @link http://www.php.net/manual/en/function.array-replace.php
 * @param array $array1 The array in which elements are replaced.
 * @param array $_ [optional] 
 * @return array an array, or null if an error occurs.
 */
function array_replace (array $array1, array $_ = null) {}

/**
 * Replaces elements from passed arrays into the first array recursively
 * @link http://www.php.net/manual/en/function.array-replace-recursive.php
 * @param array $array1 The array in which elements are replaced.
 * @param array $_ [optional] 
 * @return array an array, or null if an error occurs.
 */
function array_replace_recursive (array $array1, array $_ = null) {}

/**
 * Return all the keys or a subset of the keys of an array
 * @link http://www.php.net/manual/en/function.array-keys.php
 * @param array $array An array containing keys to return.
 * @param mixed $search_value [optional] If specified, then only keys containing these values are returned.
 * @param bool $strict [optional] Determines if strict comparison (===) should be used during the search.
 * @return array an array of all the keys in array.
 */
function array_keys (array $array, $search_value = null, bool $strict = null) {}

/**
 * Gets the first key of an array
 * @link http://www.php.net/manual/en/function.array-key-first.php
 * @param array $array An array.
 * @return mixed the first key of array if the array is not empty;
 * null otherwise.
 */
function array_key_first (array $array) {}

/**
 * Gets the last key of an array
 * @link http://www.php.net/manual/en/function.array-key-last.php
 * @param array $array An array.
 * @return mixed the last key of array if the array is not empty;
 * null otherwise.
 */
function array_key_last (array $array) {}

/**
 * Return all the values of an array
 * @link http://www.php.net/manual/en/function.array-values.php
 * @param array $array The array.
 * @return array an indexed array of values.
 */
function array_values (array $array) {}

/**
 * Counts all the values of an array
 * @link http://www.php.net/manual/en/function.array-count-values.php
 * @param array $array The array of values to count
 * @return array an associative array of values from array as
 * keys and their count as value.
 */
function array_count_values (array $array) {}

/**
 * Return the values from a single column in the input array
 * @link http://www.php.net/manual/en/function.array-column.php
 * @param array $input A multi-dimensional array or an array of objects from which to pull a
 * column of values from. If an array of objects is provided, then public
 * properties can be directly pulled. In order for protected or private
 * properties to be pulled, the class must implement both the
 * __get and __isset magic
 * methods.
 * @param mixed $column_key The column of values to return. This value may be an integer key of the
 * column you wish to retrieve, or it may be a string key name for an
 * associative array or property name. It may also be null to return
 * complete arrays or objects (this is useful together with
 * index_key to reindex the array).
 * @param mixed $index_key [optional] The column to use as the index/keys for the returned array. This value
 * may be the integer key of the column, or it may be the string key name.
 * @return array an array of values representing a single column from the input array.
 */
function array_column (array $input, $column_key, $index_key = null) {}

/**
 * Return an array with elements in reverse order
 * @link http://www.php.net/manual/en/function.array-reverse.php
 * @param array $array The input array.
 * @param bool $preserve_keys [optional] If set to true numeric keys are preserved. 
 * Non-numeric keys are not affected by this setting and will always be preserved.
 * @return array the reversed array.
 */
function array_reverse (array $array, bool $preserve_keys = null) {}

/**
 * Iteratively reduce the array to a single value using a callback function
 * @link http://www.php.net/manual/en/function.array-reduce.php
 * @param array $array The input array.
 * @param callable $callback mixedcallback
 * mixedcarry
 * mixeditem
 * <p>
 * carry
 * <br>
 * <p>
 * Holds the return value of the previous iteration; in the case of the
 * first iteration it instead holds the value of 
 * initial.
 * </p>
 * item
 * <br>
 * <p>
 * Holds the value of the current iteration.
 * </p>
 * </p>
 * @param mixed $initial [optional] If the optional initial is available, it will
 * be used at the beginning of the process, or as a final result in case
 * the array is empty.
 * @return mixed the resulting value.
 * <p>
 * If the array is empty and initial is not passed,
 * array_reduce returns null.
 * </p>
 */
function array_reduce (array $array, callable $callback, $initial = null) {}

/**
 * Pad array to the specified length with a value
 * @link http://www.php.net/manual/en/function.array-pad.php
 * @param array $array Initial array of values to pad.
 * @param int $size New size of the array.
 * @param mixed $value Value to pad if array is less than
 * size.
 * @return array a copy of the array padded to size specified
 * by size with value 
 * value. If size is 
 * positive then the array is padded on the right, if it's negative then 
 * on the left. If the absolute value of size is less
 * than or equal to the length of the array then no
 * padding takes place.
 */
function array_pad (array $array, int $size, $value) {}

/**
 * Exchanges all keys with their associated values in an array
 * @link http://www.php.net/manual/en/function.array-flip.php
 * @param array $array An array of key/value pairs to be flipped.
 * @return array the flipped array on success and null on failure.
 */
function array_flip (array $array) {}

/**
 * Changes the case of all keys in an array
 * @link http://www.php.net/manual/en/function.array-change-key-case.php
 * @param array $array The array to work on
 * @param int $case [optional] Either CASE_UPPER or
 * CASE_LOWER (default)
 * @return array an array with its keys lower or uppercased, or false if
 * array is not an array.
 */
function array_change_key_case (array $array, int $case = null) {}

/**
 * Pick one or more random keys out of an array
 * @link http://www.php.net/manual/en/function.array-rand.php
 * @param array $array The input array.
 * @param int $num [optional] Specifies how many entries should be picked.
 * @return mixed When picking only one entry, array_rand returns
 * the key for a random entry. Otherwise, an array of keys for the random
 * entries is returned. This is done so that random keys can be picked
 * from the array as well as random values. Trying to pick more elements
 * than there are in the array will result in an
 * E_WARNING level error, and NULL will be returned.
 */
function array_rand (array $array, int $num = null) {}

/**
 * Removes duplicate values from an array
 * @link http://www.php.net/manual/en/function.array-unique.php
 * @param array $array The input array.
 * @param int $sort_flags [optional] <p>
 * The optional second parameter sort_flags
 * may be used to modify the sorting behavior using these values:
 * </p>
 * <p>
 * Sorting type flags:
 * <p>
 * <br>
 * SORT_REGULAR - compare items normally
 * (don't change types)
 * <br>
 * SORT_NUMERIC - compare items numerically
 * <br>
 * SORT_STRING - compare items as strings
 * <br>
 * SORT_LOCALE_STRING - compare items as
 * strings, based on the current locale.
 * </p>
 * </p>
 * @return array the filtered array.
 */
function array_unique (array $array, int $sort_flags = null) {}

/**
 * Computes the intersection of arrays
 * @link http://www.php.net/manual/en/function.array-intersect.php
 * @param array $array1 The array with master values to check.
 * @param array $array2 An array to compare values against.
 * @param array $_ [optional] 
 * @return array an array containing all of the values in 
 * array1 whose values exist in all of the parameters.
 */
function array_intersect (array $array1, array $array2, array $_ = null) {}

/**
 * Computes the intersection of arrays using keys for comparison
 * @link http://www.php.net/manual/en/function.array-intersect-key.php
 * @param array $array1 The array with master keys to check.
 * @param array $array2 An array to compare keys against.
 * @param array $_ [optional] 
 * @return array an associative array containing all the entries of 
 * array1 which have keys that are present in all
 * arguments.
 */
function array_intersect_key (array $array1, array $array2, array $_ = null) {}

/**
 * Computes the intersection of arrays using a callback function on the keys for comparison
 * @link http://www.php.net/manual/en/function.array-intersect-ukey.php
 * @param array $array1 Initial array for comparison of the arrays.
 * @param array $array2 First array to compare keys against.
 * @param array $_ [optional] 
 * @param callable $key_compare_func <p>
 * return.callbacksort
 * </p>
 * callback.cmp
 * @return array the values of array1 whose keys exist
 * in all the arguments.
 */
function array_intersect_ukey (array $array1, array $array2, array $_ = null, callable $key_compare_func) {}

/**
 * Computes the intersection of arrays, compares data by a callback function
 * @link http://www.php.net/manual/en/function.array-uintersect.php
 * @param array $array1 The first array.
 * @param array $array2 The second array.
 * @param array $_ [optional] 
 * @param callable $value_compare_func <p>
 * return.callbacksort
 * </p>
 * callback.cmp
 * @return array an array containing all the values of array1
 * that are present in all the arguments.
 */
function array_uintersect (array $array1, array $array2, array $_ = null, callable $value_compare_func) {}

/**
 * Computes the intersection of arrays with additional index check
 * @link http://www.php.net/manual/en/function.array-intersect-assoc.php
 * @param array $array1 The array with master values to check.
 * @param array $array2 An array to compare values against.
 * @param array $_ [optional] 
 * @return array an associative array containing all the values in 
 * array1 that are present in all of the arguments.
 */
function array_intersect_assoc (array $array1, array $array2, array $_ = null) {}

/**
 * Computes the intersection of arrays with additional index check, compares data by a callback function
 * @link http://www.php.net/manual/en/function.array-uintersect-assoc.php
 * @param array $array1 The first array.
 * @param array $array2 The second array.
 * @param array $_ [optional] 
 * @param callable $value_compare_func <p>
 * return.callbacksort
 * </p>
 * callback.cmp
 * @return array an array containing all the values of
 * array1 that are present in all the arguments.
 */
function array_uintersect_assoc (array $array1, array $array2, array $_ = null, callable $value_compare_func) {}

/**
 * Computes the intersection of arrays with additional index check, compares indexes by a callback function
 * @link http://www.php.net/manual/en/function.array-intersect-uassoc.php
 * @param array $array1 Initial array for comparison of the arrays.
 * @param array $array2 First array to compare keys against.
 * @param array $_ [optional] 
 * @param callable $key_compare_func <p>
 * return.callbacksort
 * </p>
 * callback.cmp
 * @return array the values of array1 whose values exist
 * in all of the arguments.
 */
function array_intersect_uassoc (array $array1, array $array2, array $_ = null, callable $key_compare_func) {}

/**
 * Computes the intersection of arrays with additional index check, compares data and indexes by separate callback functions
 * @link http://www.php.net/manual/en/function.array-uintersect-uassoc.php
 * @param array $array1 The first array.
 * @param array $array2 The second array.
 * @param array $_ [optional] 
 * @param callable $value_compare_func <p>
 * return.callbacksort
 * </p>
 * callback.cmp
 * @param callable $key_compare_func Key comparison callback function.
 * @return array an array containing all the values of
 * array1 that are present in all the arguments.
 */
function array_uintersect_uassoc (array $array1, array $array2, array $_ = null, callable $value_compare_func, callable $key_compare_func) {}

/**
 * Computes the difference of arrays
 * @link http://www.php.net/manual/en/function.array-diff.php
 * @param array $array1 The array to compare from
 * @param array $array2 An array to compare against
 * @param array $_ [optional] 
 * @return array an array containing all the entries from
 * array1 that are not present in any of the other arrays.
 */
function array_diff (array $array1, array $array2, array $_ = null) {}

/**
 * Computes the difference of arrays using keys for comparison
 * @link http://www.php.net/manual/en/function.array-diff-key.php
 * @param array $array1 The array to compare from
 * @param array $array2 An array to compare against
 * @param array $_ [optional] 
 * @return array an array containing all the entries from
 * array1 whose keys are absent from all of the
 * other arrays.
 */
function array_diff_key (array $array1, array $array2, array $_ = null) {}

/**
 * Computes the difference of arrays using a callback function on the keys for comparison
 * @link http://www.php.net/manual/en/function.array-diff-ukey.php
 * @param array $array1 The array to compare from
 * @param array $array2 An array to compare against
 * @param array $_ [optional] 
 * @param callable $key_compare_func <p>
 * return.callbacksort
 * </p>
 * callback.cmp
 * @return array an array containing all the entries from
 * array1 that are not present in any of the other arrays.
 */
function array_diff_ukey (array $array1, array $array2, array $_ = null, callable $key_compare_func) {}

/**
 * Computes the difference of arrays by using a callback function for data comparison
 * @link http://www.php.net/manual/en/function.array-udiff.php
 * @param array $array1 The first array.
 * @param array $array2 The second array.
 * @param array $_ [optional] 
 * @param callable $value_compare_func <p>
 * The callback comparison function.
 * </p>
 * <p>
 * return.callbacksort
 * </p>
 * callback.cmp
 * @return array an array containing all the values of array1
 * that are not present in any of the other arguments.
 */
function array_udiff (array $array1, array $array2, array $_ = null, callable $value_compare_func) {}

/**
 * Computes the difference of arrays with additional index check
 * @link http://www.php.net/manual/en/function.array-diff-assoc.php
 * @param array $array1 The array to compare from
 * @param array $array2 An array to compare against
 * @param array $_ [optional] 
 * @return array an array containing all the values from
 * array1 that are not present in any of the other arrays.
 */
function array_diff_assoc (array $array1, array $array2, array $_ = null) {}

/**
 * Computes the difference of arrays with additional index check, compares data by a callback function
 * @link http://www.php.net/manual/en/function.array-udiff-assoc.php
 * @param array $array1 The first array.
 * @param array $array2 The second array.
 * @param array $_ [optional] 
 * @param callable $value_compare_func <p>
 * return.callbacksort
 * </p>
 * callback.cmp
 * @return array array_udiff_assoc returns an array
 * containing all the values from array1
 * that are not present in any of the other arguments.
 * Note that the keys are used in the comparison unlike
 * array_diff and array_udiff.
 * The comparison of arrays' data is performed by using an user-supplied
 * callback. In this aspect the behaviour is opposite to the behaviour of
 * array_diff_assoc which uses internal function for
 * comparison.
 */
function array_udiff_assoc (array $array1, array $array2, array $_ = null, callable $value_compare_func) {}

/**
 * Computes the difference of arrays with additional index check which is performed by a user supplied callback function
 * @link http://www.php.net/manual/en/function.array-diff-uassoc.php
 * @param array $array1 The array to compare from
 * @param array $array2 An array to compare against
 * @param array $_ [optional] 
 * @param callable $key_compare_func <p>
 * return.callbacksort
 * </p>
 * callback.cmp
 * @return array an array containing all the entries from
 * array1 that are not present in any of the other arrays.
 */
function array_diff_uassoc (array $array1, array $array2, array $_ = null, callable $key_compare_func) {}

/**
 * Computes the difference of arrays with additional index check, compares data and indexes by a callback function
 * @link http://www.php.net/manual/en/function.array-udiff-uassoc.php
 * @param array $array1 The first array.
 * @param array $array2 The second array.
 * @param array $_ [optional] 
 * @param callable $value_compare_func <p>
 * return.callbacksort
 * </p>
 * callback.cmp
 * @param callable $key_compare_func The comparison of keys (indices) is done also by the callback function
 * key_compare_func. This behaviour is unlike what
 * array_udiff_assoc does, since the latter compares
 * the indices by using an internal function.
 * @return array an array containing all the values from
 * array1 that are not present in any of the other
 * arguments.
 */
function array_udiff_uassoc (array $array1, array $array2, array $_ = null, callable $value_compare_func, callable $key_compare_func) {}

/**
 * Calculate the sum of values in an array
 * @link http://www.php.net/manual/en/function.array-sum.php
 * @param array $array The input array.
 * @return number the sum of values as an integer or float; 0 if the
 * array is empty.
 */
function array_sum (array $array) {}

/**
 * Calculate the product of values in an array
 * @link http://www.php.net/manual/en/function.array-product.php
 * @param array $array The array.
 * @return number the product as an integer or float.
 */
function array_product (array $array) {}

/**
 * Filters elements of an array using a callback function
 * @link http://www.php.net/manual/en/function.array-filter.php
 * @param array $array The array to iterate over
 * @param callable $callback [optional] <p>
 * The callback function to use
 * </p>
 * <p>
 * If no callback is supplied, all entries of
 * array equal to false (see
 * converting to
 * boolean) will be removed.
 * </p>
 * @param int $flag [optional] <p>
 * Flag determining what arguments are sent to callback:
 * <p>
 * <br>
 * ARRAY_FILTER_USE_KEY - pass key as the only argument
 * to callback instead of the value
 * <br>
 * ARRAY_FILTER_USE_BOTH - pass both value and key as
 * arguments to callback instead of the value
 * </p>
 * Default is 0 which will pass value as the only argument
 * to callback instead.
 * </p>
 * @return array the filtered array.
 */
function array_filter (array $array, callable $callback = null, int $flag = null) {}

/**
 * Applies the callback to the elements of the given arrays
 * @link http://www.php.net/manual/en/function.array-map.php
 * @param callable $callback Callback function to run for each element in each array.
 * @param array $array1 An array to run through the callback function.
 * @param array $_ [optional] 
 * @return array an array containing all the elements of array1
 * after applying the callback function to each one.
 */
function array_map (callable $callback, array $array1, array $_ = null) {}

/**
 * Split an array into chunks
 * @link http://www.php.net/manual/en/function.array-chunk.php
 * @param array $array The array to work on
 * @param int $size The size of each chunk
 * @param bool $preserve_keys [optional] When set to true keys will be preserved.
 * Default is false which will reindex the chunk numerically
 * @return array a multidimensional numerically indexed array, starting with zero,
 * with each dimension containing size elements.
 */
function array_chunk (array $array, int $size, bool $preserve_keys = null) {}

/**
 * Creates an array by using one array for keys and another for its values
 * @link http://www.php.net/manual/en/function.array-combine.php
 * @param array $keys Array of keys to be used. Illegal values for key will be
 * converted to string.
 * @param array $values Array of values to be used
 * @return array the combined array, false if the number of elements
 * for each array isn't equal.
 */
function array_combine (array $keys, array $values) {}

/**
 * Checks if the given key or index exists in the array
 * @link http://www.php.net/manual/en/function.array-key-exists.php
 * @param mixed $key Value to check.
 * @param array $array An array with keys to check.
 * @return bool true on success or false on failure
 * <p>
 * array_key_exists will search for the keys in the first dimension only.
 * Nested keys in multidimensional arrays will not be found.
 * </p>
 */
function array_key_exists ($key, array $array) {}

/**
 * Alias: current
 * @link http://www.php.net/manual/en/function.pos.php
 * @param mixed $arg
 */
function pos ($arg) {}

/**
 * Alias: count
 * @link http://www.php.net/manual/en/function.sizeof.php
 * @param mixed $var
 * @param mixed $mode [optional]
 */
function sizeof ($var, $mode = null) {}

/**
 * Alias: array_key_exists
 * @link http://www.php.net/manual/en/function.key-exists.php
 * @param mixed $key
 * @param mixed $search
 */
function key_exists ($key, $search) {}

/**
 * Checks if assertion is false
 * @link http://www.php.net/manual/en/function.assert.php
 * @param mixed $assertion <p>
 * The assertion. In PHP 5, this must be either a string to
 * be evaluated or a boolean to be tested. In PHP 7, this may
 * also be any expression that returns a value, which will be executed and
 * the result used to indicate whether the assertion succeeded or failed.
 * </p>
 * <p>
 * Using string as the assertion is
 * DEPRECATED as of PHP 7.2.
 * </p>
 * @param string $description [optional] An optional description that will be included in the failure message if
 * the assertion fails.
 * @return bool false if the assertion is false, true otherwise.
 */
function assert ($assertion, string $description = null) {}

/**
 * Set/get the various assert flags
 * @link http://www.php.net/manual/en/function.assert-options.php
 * @param int $what <table>
 * Assert Options
 * <table>
 * <tr valign="top">
 * <td>Option</td>
 * <td>INI Setting</td>
 * <td>Default value</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>ASSERT_ACTIVE</td>
 * <td>assert.active</td>
 * <td>1</td>
 * <td>enable assert evaluation</td>
 * </tr>
 * <tr valign="top">
 * <td>ASSERT_WARNING</td>
 * <td>assert.warning</td>
 * <td>1</td>
 * <td>issue a PHP warning for each failed assertion</td>
 * </tr>
 * <tr valign="top">
 * <td>ASSERT_BAIL</td>
 * <td>assert.bail</td>
 * <td>0</td>
 * <td>terminate execution on failed assertions</td>
 * </tr>
 * <tr valign="top">
 * <td>ASSERT_QUIET_EVAL</td>
 * <td>assert.quiet_eval</td>
 * <td>0</td>
 * <td>
 * disable error_reporting during assertion expression
 * evaluation
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>ASSERT_CALLBACK</td>
 * <td>assert.callback</td>
 * <td)<null)</td>
 * <td>Callback to call on failed assertions</td>
 * </tr>
 * </table>
 * </table>
 * @param mixed $value [optional] An optional new value for the option.
 * @return mixed the original setting of any option or false on errors.
 */
function assert_options (int $what, $value = null) {}

/**
 * Compares two "PHP-standardized" version number strings
 * @link http://www.php.net/manual/en/function.version-compare.php
 * @param string $version1 First version number.
 * @param string $version2 Second version number.
 * @return int By default, version_compare returns
 * -1 if the first version is lower than the second, 
 * 0 if they are equal, and
 * 1 if the second is lower. 
 * <p>
 * When using the optional operator argument, the
 * function will return true if the relationship is the one specified
 * by the operator, false otherwise. 
 * </p>
 */
function version_compare (string $version1, string $version2) {}

/**
 * Convert a pathname and a project identifier to a System V IPC key
 * @link http://www.php.net/manual/en/function.ftok.php
 * @param string $pathname Path to an accessible file.
 * @param string $proj Project identifier. This must be a one character string.
 * @return int On success the return value will be the created key value, otherwise
 * -1 is returned.
 */
function ftok (string $pathname, string $proj) {}

/**
 * Perform the rot13 transform on a string
 * @link http://www.php.net/manual/en/function.str-rot13.php
 * @param string $str The input string.
 * @return string the ROT13 version of the given string.
 */
function str_rot13 (string $str) {}

/**
 * Retrieve list of registered filters
 * @link http://www.php.net/manual/en/function.stream-get-filters.php
 * @return array an indexed array containing the name of all stream filters
 * available.
 */
function stream_get_filters () {}

/**
 * Register a user defined stream filter
 * @link http://www.php.net/manual/en/function.stream-filter-register.php
 * @param string $filtername The filter name to be registered.
 * @param string $classname To implement a filter, you need to define a class as an extension of
 * php_user_filter with a number of member
 * functions. When performing read/write operations on the stream
 * to which your filter is attached, PHP will pass the data through your
 * filter (and any other filters attached to that stream) so that the
 * data may be modified as desired. You must implement the methods
 * exactly as described in php_user_filter - doing
 * otherwise will lead to undefined behaviour.
 * @return bool true on success or false on failure
 * <p>
 * stream_filter_register will return false if the
 * filtername is already defined.
 * </p>
 */
function stream_filter_register (string $filtername, string $classname) {}

/**
 * Return a bucket object from the brigade for operating on
 * @link http://www.php.net/manual/en/function.stream-bucket-make-writeable.php
 * @param resource $brigade 
 * @return object 
 */
function stream_bucket_make_writeable ($brigade) {}

/**
 * Prepend bucket to brigade
 * @link http://www.php.net/manual/en/function.stream-bucket-prepend.php
 * @param resource $brigade brigade is a resource pointing to a bucket brigade
 * which contains one or more bucket objects.
 * @param object $bucket A bucket object.
 * @return void 
 */
function stream_bucket_prepend ($brigade, $bucket) {}

/**
 * Append bucket to brigade
 * @link http://www.php.net/manual/en/function.stream-bucket-append.php
 * @param resource $brigade 
 * @param object $bucket 
 * @return void 
 */
function stream_bucket_append ($brigade, $bucket) {}

/**
 * Create a new bucket for use on the current stream
 * @link http://www.php.net/manual/en/function.stream-bucket-new.php
 * @param resource $stream 
 * @param string $buffer 
 * @return object 
 */
function stream_bucket_new ($stream, string $buffer) {}

/**
 * Add URL rewriter values
 * @link http://www.php.net/manual/en/function.output-add-rewrite-var.php
 * @param string $name The variable name.
 * @param string $value The variable value.
 * @return bool true on success or false on failure
 */
function output_add_rewrite_var (string $name, string $value) {}

/**
 * Reset URL rewriter values
 * @link http://www.php.net/manual/en/function.output-reset-rewrite-vars.php
 * @return bool true on success or false on failure
 */
function output_reset_rewrite_vars () {}

/**
 * Returns directory path used for temporary files
 * @link http://www.php.net/manual/en/function.sys-get-temp-dir.php
 * @return string the path of the temporary directory.
 */
function sys_get_temp_dir () {}

/**
 * Set process codepage
 * @link http://www.php.net/manual/en/function.sapi-windows-cp-set.php
 * @param int $cp A codepage identifier.
 * @return bool true on success or false on failure
 */
function sapi_windows_cp_set (int $cp) {}

/**
 * Get process codepage
 * @link http://www.php.net/manual/en/function.sapi-windows-cp-get.php
 * @param string $kind The kind of codepage: either 'ansi' or 'oem'.
 * @return int the codepage identifier.
 */
function sapi_windows_cp_get (string $kind) {}

/**
 * Indicates whether the codepage is UTF-8 compatible
 * @link http://www.php.net/manual/en/function.sapi-windows-cp-is-utf8.php
 * @return bool whether the codepage of the current process is UTF-8 compatible.
 */
function sapi_windows_cp_is_utf8 () {}

/**
 * Convert string from one codepage to another
 * @link http://www.php.net/manual/en/function.sapi-windows-cp-conv.php
 * @param int|string $in_codepage The codepage of the subject string.
 * Either the codepage name or identifier.
 * @param int|string $out_codepage The codepage to convert the subject string to.
 * Either the codepage name or identifier.
 * @param string $subject The string to convert.
 * @return string The subject string converted to
 * out_codepage, or null on failure.
 */
function sapi_windows_cp_conv ($in_codepage, $out_codepage, string $subject) {}

/**
 * Loads a PHP extension at runtime
 * @link http://www.php.net/manual/en/function.dl.php
 * @param string $library <p>
 * This parameter is only the filename of the
 * extension to load which also depends on your platform. For example,
 * the sockets extension (if compiled
 * as a shared module, not the default!) would be called 
 * sockets.so on Unix platforms whereas it is called
 * php_sockets.dll on the Windows platform.
 * </p>
 * <p>
 * The directory where the extension is loaded from depends on your
 * platform:
 * </p>
 * <p>
 * Windows - If not explicitly set in the php.ini, the extension is
 * loaded from C:\php5\ by default.
 * </p>
 * <p>
 * Unix - If not explicitly set in the php.ini, the default extension
 * directory depends on
 * <p>
 * <br>
 * whether PHP has been built with --enable-debug
 * or not
 * <br>
 * whether PHP has been built with (experimental) ZTS (Zend Thread Safety)
 * support or not
 * <br>
 * the current internal ZEND_MODULE_API_NO (Zend
 * internal module API number, which is basically the date on which a
 * major module API change happened, e.g. 20010901)
 * </p>
 * Taking into account the above, the directory then defaults to
 * &lt;install-dir&gt;/lib/php/extensions/ &lt;debug-or-not&gt;-&lt;zts-or-not&gt;-ZEND_MODULE_API_NO,
 * e.g.
 * /usr/local/php/lib/php/extensions/debug-non-zts-20010901
 * or
 * /usr/local/php/lib/php/extensions/no-debug-zts-20010901.
 * </p>
 * @return bool true on success or false on failure If the functionality of loading modules is not available
 * or has been disabled (either by setting
 * enable_dl off or by enabling safe mode
 * in php.ini) an E_ERROR is emitted
 * and execution is stopped. If dl fails because the
 * specified library couldn't be loaded, in addition to false an
 * E_WARNING message is emitted.
 */
function dl (string $library) {}

/**
 * Sets the process title
 * @link http://www.php.net/manual/en/function.cli-set-process-title.php
 * @param string $title The new title.
 * @return bool true on success or false on failure
 */
function cli_set_process_title (string $title) {}

/**
 * Returns the current process title
 * @link http://www.php.net/manual/en/function.cli-get-process-title.php
 * @return string Return a string with the current process title or null on error.
 */
function cli_get_process_title () {}


/**
 * 
 * @link http://www.php.net/manual/en/misc.constants.php
 */
define ('CONNECTION_ABORTED', 1);

/**
 * 
 * @link http://www.php.net/manual/en/misc.constants.php
 */
define ('CONNECTION_NORMAL', 0);

/**
 * 
 * @link http://www.php.net/manual/en/misc.constants.php
 */
define ('CONNECTION_TIMEOUT', 2);
define ('INI_USER', 1);
define ('INI_PERDIR', 2);
define ('INI_SYSTEM', 4);
define ('INI_ALL', 7);

/**
 * Normal INI scanner mode (since PHP 5.3).
 * @link http://www.php.net/manual/en/filesystem.constants.php
 */
define ('INI_SCANNER_NORMAL', 0);

/**
 * Raw INI scanner mode (since PHP 5.3).
 * @link http://www.php.net/manual/en/filesystem.constants.php
 */
define ('INI_SCANNER_RAW', 1);

/**
 * Typed INI scanner mode (since PHP 5.6.1).
 * @link http://www.php.net/manual/en/filesystem.constants.php
 */
define ('INI_SCANNER_TYPED', 2);

/**
 * 
 * @link http://www.php.net/manual/en/url.constants.php
 */
define ('PHP_URL_SCHEME', 0);

/**
 * Outputs the hostname of the URL parsed.
 * @link http://www.php.net/manual/en/url.constants.php
 */
define ('PHP_URL_HOST', 1);

/**
 * Outputs the port of the URL parsed.
 * @link http://www.php.net/manual/en/url.constants.php
 */
define ('PHP_URL_PORT', 2);

/**
 * Outputs the user of the URL parsed.
 * @link http://www.php.net/manual/en/url.constants.php
 */
define ('PHP_URL_USER', 3);

/**
 * Outputs the password of the URL parsed.
 * @link http://www.php.net/manual/en/url.constants.php
 */
define ('PHP_URL_PASS', 4);

/**
 * Outputs the path of the URL parsed.
 * @link http://www.php.net/manual/en/url.constants.php
 */
define ('PHP_URL_PATH', 5);

/**
 * Outputs the query string of the URL parsed.
 * @link http://www.php.net/manual/en/url.constants.php
 */
define ('PHP_URL_QUERY', 6);

/**
 * Outputs the fragment (string after the hashmark #) of the URL parsed.
 * @link http://www.php.net/manual/en/url.constants.php
 */
define ('PHP_URL_FRAGMENT', 7);

/**
 * Encoding is performed per
 * RFC 1738 and the
 * application/x-www-form-urlencoded media type, which
 * implies that spaces are encoded as plus (+) signs.
 * @link http://www.php.net/manual/en/url.constants.php
 */
define ('PHP_QUERY_RFC1738', 1);

/**
 * Encoding is performed according to RFC 3986,
 * and spaces will be percent encoded (%20).
 * @link http://www.php.net/manual/en/url.constants.php
 */
define ('PHP_QUERY_RFC3986', 2);
define ('M_E', 2.718281828459);
define ('M_LOG2E', 1.442695040889);
define ('M_LOG10E', 0.43429448190325);
define ('M_LN2', 0.69314718055995);
define ('M_LN10', 2.302585092994);

/**
 * Round halves up
 * @link http://www.php.net/manual/en/math.constants.php
 */
define ('M_PI', 3.1415926535898);
define ('M_PI_2', 1.5707963267949);
define ('M_PI_4', 0.78539816339745);
define ('M_1_PI', 0.31830988618379);
define ('M_2_PI', 0.63661977236758);
define ('M_SQRTPI', 1.7724538509055);
define ('M_2_SQRTPI', 1.1283791670955);
define ('M_LNPI', 1.1447298858494);
define ('M_EULER', 0.57721566490153);
define ('M_SQRT2', 1.4142135623731);
define ('M_SQRT1_2', 0.70710678118655);
define ('M_SQRT3', 1.7320508075689);
define ('INF', INF);
define ('NAN', NAN);
define ('PHP_ROUND_HALF_UP', 1);

/**
 * Round halves down
 * @link http://www.php.net/manual/en/math.constants.php
 */
define ('PHP_ROUND_HALF_DOWN', 2);

/**
 * Round halves to even numbers
 * @link http://www.php.net/manual/en/math.constants.php
 */
define ('PHP_ROUND_HALF_EVEN', 3);

/**
 * Round halves to odd numbers
 * @link http://www.php.net/manual/en/math.constants.php
 */
define ('PHP_ROUND_HALF_ODD', 4);
define ('INFO_GENERAL', 1);

/**
 * PHP Credits. See also phpcredits.
 * @link http://www.php.net/manual/en/info.constants.php
 */
define ('INFO_CREDITS', 2);

/**
 * Current Local and Master values for PHP directives. See
 * also ini_get.
 * @link http://www.php.net/manual/en/info.constants.php
 */
define ('INFO_CONFIGURATION', 4);

/**
 * Loaded modules and their respective settings.
 * @link http://www.php.net/manual/en/info.constants.php
 */
define ('INFO_MODULES', 8);

/**
 * Environment Variable information that's also available in
 * $_ENV.
 * @link http://www.php.net/manual/en/info.constants.php
 */
define ('INFO_ENVIRONMENT', 16);

/**
 * Shows all 
 * predefined variables from EGPCS (Environment, GET,
 * POST, Cookie, Server).
 * @link http://www.php.net/manual/en/info.constants.php
 */
define ('INFO_VARIABLES', 32);

/**
 * PHP License information. See also the license faq.
 * @link http://www.php.net/manual/en/info.constants.php
 */
define ('INFO_LICENSE', 64);

/**
 * Unused
 * @link http://www.php.net/manual/en/info.constants.php
 */
define ('INFO_ALL', 4294967295);

/**
 * A list of the core developers
 * @link http://www.php.net/manual/en/info.constants.php
 */
define ('CREDITS_GROUP', 1);

/**
 * General credits: Language design and concept, PHP
 * authors and SAPI module.
 * @link http://www.php.net/manual/en/info.constants.php
 */
define ('CREDITS_GENERAL', 2);

/**
 * A list of the server API modules for PHP, and their authors.
 * @link http://www.php.net/manual/en/info.constants.php
 */
define ('CREDITS_SAPI', 4);

/**
 * A list of the extension modules for PHP, and their authors.
 * @link http://www.php.net/manual/en/info.constants.php
 */
define ('CREDITS_MODULES', 8);

/**
 * The credits for the documentation team.
 * @link http://www.php.net/manual/en/info.constants.php
 */
define ('CREDITS_DOCS', 16);

/**
 * Usually used in combination with the other flags. Indicates
 * that a complete stand-alone HTML page needs to be
 * printed including the information indicated by the other
 * flags.
 * @link http://www.php.net/manual/en/info.constants.php
 */
define ('CREDITS_FULLPAGE', 32);

/**
 * The credits for the quality assurance team.
 * @link http://www.php.net/manual/en/info.constants.php
 */
define ('CREDITS_QA', 64);

/**
 * The configuration line, php.ini location, build date, Web
 * Server, System and more.
 * @link http://www.php.net/manual/en/info.constants.php
 */
define ('CREDITS_ALL', 4294967295);

/**
 * 
 * @link http://www.php.net/manual/en/string.constants.php
 */
define ('HTML_SPECIALCHARS', 0);

/**
 * 
 * @link http://www.php.net/manual/en/string.constants.php
 */
define ('HTML_ENTITIES', 1);

/**
 * 
 * @link http://www.php.net/manual/en/string.constants.php
 */
define ('ENT_COMPAT', 2);

/**
 * 
 * @link http://www.php.net/manual/en/string.constants.php
 */
define ('ENT_QUOTES', 3);

/**
 * 
 * @link http://www.php.net/manual/en/string.constants.php
 */
define ('ENT_NOQUOTES', 0);

/**
 * 
 * @link http://www.php.net/manual/en/string.constants.php
 */
define ('ENT_IGNORE', 4);

/**
 * 
 * @link http://www.php.net/manual/en/string.constants.php
 */
define ('ENT_SUBSTITUTE', 8);

/**
 * 
 * @link http://www.php.net/manual/en/string.constants.php
 */
define ('ENT_DISALLOWED', 128);

/**
 * 
 * @link http://www.php.net/manual/en/string.constants.php
 */
define ('ENT_HTML401', 0);

/**
 * 
 * @link http://www.php.net/manual/en/string.constants.php
 */
define ('ENT_XML1', 16);

/**
 * 
 * @link http://www.php.net/manual/en/string.constants.php
 */
define ('ENT_XHTML', 32);

/**
 * 
 * @link http://www.php.net/manual/en/string.constants.php
 */
define ('ENT_HTML5', 48);

/**
 * 
 * @link http://www.php.net/manual/en/string.constants.php
 */
define ('STR_PAD_LEFT', 0);

/**
 * 
 * @link http://www.php.net/manual/en/string.constants.php
 */
define ('STR_PAD_RIGHT', 1);

/**
 * 
 * @link http://www.php.net/manual/en/string.constants.php
 */
define ('STR_PAD_BOTH', 2);

/**
 * 
 * @link http://www.php.net/manual/en/filesystem.constants.php
 */
define ('PATHINFO_DIRNAME', 1);

/**
 * 
 * @link http://www.php.net/manual/en/filesystem.constants.php
 */
define ('PATHINFO_BASENAME', 2);

/**
 * 
 * @link http://www.php.net/manual/en/filesystem.constants.php
 */
define ('PATHINFO_EXTENSION', 4);

/**
 * Since PHP 5.2.0.
 * @link http://www.php.net/manual/en/filesystem.constants.php
 */
define ('PATHINFO_FILENAME', 8);

/**
 * 
 * @link http://www.php.net/manual/en/string.constants.php
 */
define ('CHAR_MAX', 127);

/**
 * 
 * @link http://www.php.net/manual/en/string.constants.php
 */
define ('LC_CTYPE', 2);

/**
 * 
 * @link http://www.php.net/manual/en/string.constants.php
 */
define ('LC_NUMERIC', 4);

/**
 * 
 * @link http://www.php.net/manual/en/string.constants.php
 */
define ('LC_TIME', 5);

/**
 * 
 * @link http://www.php.net/manual/en/string.constants.php
 */
define ('LC_COLLATE', 1);

/**
 * 
 * @link http://www.php.net/manual/en/string.constants.php
 */
define ('LC_MONETARY', 3);

/**
 * 
 * @link http://www.php.net/manual/en/string.constants.php
 */
define ('LC_ALL', 0);

/**
 * 
 * @link http://www.php.net/manual/en/filesystem.constants.php
 */
define ('SEEK_SET', 0);

/**
 * 
 * @link http://www.php.net/manual/en/filesystem.constants.php
 */
define ('SEEK_CUR', 1);

/**
 * 
 * @link http://www.php.net/manual/en/filesystem.constants.php
 */
define ('SEEK_END', 2);

/**
 * 
 * @link http://www.php.net/manual/en/filesystem.constants.php
 */
define ('LOCK_SH', 1);

/**
 * 
 * @link http://www.php.net/manual/en/filesystem.constants.php
 */
define ('LOCK_EX', 2);

/**
 * 
 * @link http://www.php.net/manual/en/filesystem.constants.php
 */
define ('LOCK_UN', 3);

/**
 * 
 * @link http://www.php.net/manual/en/filesystem.constants.php
 */
define ('LOCK_NB', 4);

/**
 * A connection with an external resource has been established.
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_NOTIFY_CONNECT', 2);

/**
 * Additional authorization is required to access the specified resource.
 * Typical issued with severity level of
 * STREAM_NOTIFY_SEVERITY_ERR.
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_NOTIFY_AUTH_REQUIRED', 3);

/**
 * Authorization has been completed (with or without success).
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_NOTIFY_AUTH_RESULT', 10);

/**
 * The mime-type of resource has been identified,
 * refer to message for a description of the
 * discovered type.
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_NOTIFY_MIME_TYPE_IS', 4);

/**
 * The size of the resource has been discovered.
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_NOTIFY_FILE_SIZE_IS', 5);

/**
 * The external resource has redirected the stream to an alternate
 * location. Refer to message.
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_NOTIFY_REDIRECTED', 6);

/**
 * Indicates current progress of the stream transfer in
 * bytes_transferred and possibly
 * bytes_max as well.
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_NOTIFY_PROGRESS', 7);

/**
 * A generic error occurred on the stream, consult
 * message and message_code
 * for details.
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_NOTIFY_FAILURE', 9);

/**
 * There is no more data available on the stream.
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_NOTIFY_COMPLETED', 8);

/**
 * A remote address required for this stream has been resolved, or the resolution
 * failed. See severity for an indication of which happened.
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_NOTIFY_RESOLVE', 1);

/**
 * Normal, non-error related, notification.
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_NOTIFY_SEVERITY_INFO', 0);

/**
 * Non critical error condition. Processing may continue.
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_NOTIFY_SEVERITY_WARN', 1);

/**
 * A critical error occurred. Processing cannot continue.
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_NOTIFY_SEVERITY_ERR', 2);

/**
 * Used with stream_filter_append and
 * stream_filter_prepend to indicate
 * that the specified filter should only be applied when
 * reading
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_FILTER_READ', 1);

/**
 * Used with stream_filter_append and
 * stream_filter_prepend to indicate
 * that the specified filter should only be applied when
 * writing
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_FILTER_WRITE', 2);

/**
 * This constant is equivalent to 
 * STREAM_FILTER_READ | STREAM_FILTER_WRITE
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_FILTER_ALL', 3);

/**
 * Client socket opened with stream_socket_client
 * should remain persistent between page loads.
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_CLIENT_PERSISTENT', 1);

/**
 * Open client socket asynchronously. This option must be used
 * together with the STREAM_CLIENT_CONNECT flag.
 * Used with stream_socket_client.
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_CLIENT_ASYNC_CONNECT', 2);

/**
 * Open client socket connection. Client sockets should always
 * include this flag. Used with stream_socket_client.
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_CLIENT_CONNECT', 4);
define ('STREAM_CRYPTO_METHOD_ANY_CLIENT', 63);
define ('STREAM_CRYPTO_METHOD_SSLv2_CLIENT', 3);
define ('STREAM_CRYPTO_METHOD_SSLv3_CLIENT', 5);
define ('STREAM_CRYPTO_METHOD_SSLv23_CLIENT', 57);
define ('STREAM_CRYPTO_METHOD_TLS_CLIENT', 57);
define ('STREAM_CRYPTO_METHOD_TLSv1_0_CLIENT', 9);
define ('STREAM_CRYPTO_METHOD_TLSv1_1_CLIENT', 17);
define ('STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT', 33);
define ('STREAM_CRYPTO_METHOD_ANY_SERVER', 62);
define ('STREAM_CRYPTO_METHOD_SSLv2_SERVER', 2);
define ('STREAM_CRYPTO_METHOD_SSLv3_SERVER', 4);
define ('STREAM_CRYPTO_METHOD_SSLv23_SERVER', 56);
define ('STREAM_CRYPTO_METHOD_TLS_SERVER', 56);
define ('STREAM_CRYPTO_METHOD_TLSv1_0_SERVER', 8);
define ('STREAM_CRYPTO_METHOD_TLSv1_1_SERVER', 16);
define ('STREAM_CRYPTO_METHOD_TLSv1_2_SERVER', 32);
define ('STREAM_CRYPTO_PROTO_SSLv3', 4);
define ('STREAM_CRYPTO_PROTO_TLSv1_0', 8);
define ('STREAM_CRYPTO_PROTO_TLSv1_1', 16);
define ('STREAM_CRYPTO_PROTO_TLSv1_2', 32);

/**
 * Used with stream_socket_shutdown to disable
 * further receptions. Added in PHP 5.2.1.
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_SHUT_RD', 0);

/**
 * Used with stream_socket_shutdown to disable
 * further transmissions. Added in PHP 5.2.1.
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_SHUT_WR', 1);

/**
 * Used with stream_socket_shutdown to disable
 * further receptions and transmissions. Added in PHP 5.2.1.
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_SHUT_RDWR', 2);

/**
 * Internet Protocol Version 4 (IPv4).
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_PF_INET', 2);

/**
 * Internet Protocol Version 6 (IPv6).
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_PF_INET6', 23);

/**
 * Unix system internal protocols.
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_PF_UNIX', 1);

/**
 * Provides a IP socket.
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_IPPROTO_IP', 0);

/**
 * Provides a TCP socket.
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_IPPROTO_TCP', 6);

/**
 * Provides a UDP socket.
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_IPPROTO_UDP', 17);

/**
 * Provides a ICMP socket.
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_IPPROTO_ICMP', 1);

/**
 * Provides a RAW socket.
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_IPPROTO_RAW', 255);

/**
 * Provides sequenced, two-way byte streams with a transmission mechanism
 * for out-of-band data (TCP, for example).
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_SOCK_STREAM', 1);

/**
 * Provides datagrams, which are connectionless messages (UDP, for
 * example).
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_SOCK_DGRAM', 2);

/**
 * Provides a raw socket, which provides access to internal network
 * protocols and interfaces. Usually this type of socket is just available
 * to the root user.
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_SOCK_RAW', 3);

/**
 * Provides a sequenced packet stream socket.
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_SOCK_SEQPACKET', 5);

/**
 * Provides a RDM (Reliably-delivered messages) socket.
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_SOCK_RDM', 4);
define ('STREAM_PEEK', 2);
define ('STREAM_OOB', 1);

/**
 * Tells a stream created with stream_socket_server
 * to bind to the specified target. Server sockets should always include this flag.
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_SERVER_BIND', 4);

/**
 * Tells a stream created with stream_socket_server
 * and bound using the STREAM_SERVER_BIND flag to start
 * listening on the socket. Connection-orientated transports (such as TCP)
 * must use this flag, otherwise the server socket will not be enabled.
 * Using this flag for connect-less transports (such as UDP) is an error.
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_SERVER_LISTEN', 8);

/**
 * Search for filename in
 * include_path (since PHP 5).
 * @link http://www.php.net/manual/en/filesystem.constants.php
 */
define ('FILE_USE_INCLUDE_PATH', 1);

/**
 * Strip EOL characters (since PHP 5).
 * @link http://www.php.net/manual/en/filesystem.constants.php
 */
define ('FILE_IGNORE_NEW_LINES', 2);

/**
 * Skip empty lines (since PHP 5).
 * @link http://www.php.net/manual/en/filesystem.constants.php
 */
define ('FILE_SKIP_EMPTY_LINES', 4);

/**
 * Append content to existing file.
 * @link http://www.php.net/manual/en/filesystem.constants.php
 */
define ('FILE_APPEND', 8);

/**
 * 
 * @link http://www.php.net/manual/en/filesystem.constants.php
 */
define ('FILE_NO_DEFAULT_CONTEXT', 16);

/**
 * <p>
 * Text mode (since PHP 5.2.7).
 * <p>
 * This constant has no effect, and is only available for 
 * forward compatibility.
 * </p>
 * </p>
 * @link http://www.php.net/manual/en/filesystem.constants.php
 */
define ('FILE_TEXT', 0);

/**
 * <p>
 * Binary mode (since PHP 5.2.7).
 * <p>
 * This constant has no effect, and is only available for 
 * forward compatibility.
 * </p>
 * </p>
 * @link http://www.php.net/manual/en/filesystem.constants.php
 */
define ('FILE_BINARY', 0);

/**
 * Disable backslash escaping.
 * @link http://www.php.net/manual/en/filesystem.constants.php
 */
define ('FNM_NOESCAPE', 1);

/**
 * Slash in string only matches slash in the given pattern.
 * @link http://www.php.net/manual/en/filesystem.constants.php
 */
define ('FNM_PATHNAME', 2);

/**
 * Leading period in string must be exactly matched by period in the given pattern.
 * @link http://www.php.net/manual/en/filesystem.constants.php
 */
define ('FNM_PERIOD', 4);

/**
 * Caseless match. Part of the GNU extension.
 * @link http://www.php.net/manual/en/filesystem.constants.php
 */
define ('FNM_CASEFOLD', 16);

/**
 * Return Code indicating that the
 * userspace filter returned buckets in $out.
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('PSFS_PASS_ON', 2);

/**
 * Return Code indicating that the
 * userspace filter did not return buckets in $out
 * (i.e. No data available).
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('PSFS_FEED_ME', 1);

/**
 * Return Code indicating that the
 * userspace filter encountered an unrecoverable error
 * (i.e. Invalid data received).
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('PSFS_ERR_FATAL', 0);

/**
 * Regular read/write.
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('PSFS_FLAG_NORMAL', 0);

/**
 * An incremental flush.
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('PSFS_FLAG_FLUSH_INC', 1);

/**
 * Final flush prior to closing.
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('PSFS_FLAG_FLUSH_CLOSE', 2);

/**
 * <p>
 * The default algorithm to use for hashing if no algorithm is provided.
 * This may change in newer PHP releases when newer, stronger hashing
 * algorithms are supported.
 * </p>
 * <p>
 * It is worth noting that over time this constant can (and likely will)
 * change. Therefore you should be aware that the length of the resulting
 * hash can change. Therefore, if you use PASSWORD_DEFAULT
 * you should store the resulting hash in a way that can store more than 60
 * characters (255 is the recomended width).
 * </p>
 * <p>
 * Values for this constant:
 * </p>
 * <p>
 * <br>
 * PHP 5.5.0 - PASSWORD_BCRYPT
 * @link http://www.php.net/manual/en/password.constants.php
 */
define ('PASSWORD_DEFAULT', 1);

/**
 * <p>
 * PASSWORD_BCRYPT is used to create new password
 * hashes using the CRYPT_BLOWFISH algorithm.
 * </p>
 * <p>
 * This will always result in a hash using the "$2y$" crypt format, 
 * which is always 60 characters wide.
 * </p>
 * <p>
 * Supported Options:
 * </p>
 * <p>
 * <br>
 * <p>
 * salt (string) - to manually provide a salt to use when hashing the password.
 * Note that this will override and prevent a salt from being automatically generated.
 * </p>
 * <p>
 * If omitted, a random salt will be generated by password_hash for
 * each password hashed. This is the intended mode of operation
 * and as of PHP 7.0.0 the salt option has been deprecated.
 * </p>
 * @link http://www.php.net/manual/en/password.constants.php
 */
define ('PASSWORD_BCRYPT', 1);

/**
 * <p>
 * PASSWORD_ARGON2I is used to create new password
 * hashes using the Argon2 algorithm.
 * </p>
 * <p>
 * Supported Options:
 * </p>
 * <p>
 * <br>
 * <p>
 * memory_cost (integer) - Maximum memory (in bytes) that may 
 * be used to compute the Argon2 hash. Defaults to PASSWORD_ARGON2_DEFAULT_MEMORY_COST.
 * </p>
 * @link http://www.php.net/manual/en/password.constants.php
 */
define ('PASSWORD_ARGON2I', 2);

/**
 * Available as of PHP 7.3.0.
 * @link http://www.php.net/manual/en/password.constants.php
 */
define ('PASSWORD_ARGON2ID', 3);
define ('PASSWORD_BCRYPT_DEFAULT_COST', 10);

/**
 * <p>
 * Default amount of memory in bytes that Argon2lib will use while trying to 
 * compute a hash.
 * </p>
 * <p>
 * Available as of PHP 7.2.0.
 * </p>
 * @link http://www.php.net/manual/en/password.constants.php
 */
define ('PASSWORD_ARGON2_DEFAULT_MEMORY_COST', 1024);

/**
 * <p>
 * Default amount of time that Argon2lib will spend trying to compute a hash.
 * </p>
 * <p>
 * Available as of PHP 7.2.0.
 * </p>
 * @link http://www.php.net/manual/en/password.constants.php
 */
define ('PASSWORD_ARGON2_DEFAULT_TIME_COST', 2);

/**
 * <p>
 * Default number of threads that Argon2lib will use.
 * </p>
 * <p>
 * Available as of PHP 7.2.0.
 * </p>
 * @link http://www.php.net/manual/en/password.constants.php
 */
define ('PASSWORD_ARGON2_DEFAULT_THREADS', 2);
define ('MT_RAND_MT19937', 0);
define ('MT_RAND_PHP', 1);

/**
 * 
 * @link http://www.php.net/manual/en/string.constants.php
 */
define ('CRYPT_SALT_LENGTH', 123);

/**
 * 
 * @link http://www.php.net/manual/en/string.constants.php
 */
define ('CRYPT_STD_DES', 1);

/**
 * 
 * @link http://www.php.net/manual/en/string.constants.php
 */
define ('CRYPT_EXT_DES', 1);

/**
 * 
 * @link http://www.php.net/manual/en/string.constants.php
 */
define ('CRYPT_MD5', 1);

/**
 * 
 * @link http://www.php.net/manual/en/string.constants.php
 */
define ('CRYPT_BLOWFISH', 1);
define ('CRYPT_SHA256', 1);
define ('CRYPT_SHA512', 1);

/**
 * 
 * @link http://www.php.net/manual/en/dir.constants.php
 */
define ('DIRECTORY_SEPARATOR', "\\");

/**
 * Semicolon on Windows, colon otherwise.
 * @link http://www.php.net/manual/en/dir.constants.php
 */
define ('PATH_SEPARATOR', ";");

/**
 * Available since PHP 5.4.0.
 * @link http://www.php.net/manual/en/dir.constants.php
 */
define ('SCANDIR_SORT_ASCENDING', 0);

/**
 * Available since PHP 5.4.0.
 * @link http://www.php.net/manual/en/dir.constants.php
 */
define ('SCANDIR_SORT_DESCENDING', 1);

/**
 * Available since PHP 5.4.0.
 * @link http://www.php.net/manual/en/dir.constants.php
 */
define ('SCANDIR_SORT_NONE', 2);

/**
 * 
 * @link http://www.php.net/manual/en/filesystem.constants.php
 */
define ('GLOB_BRACE', 128);

/**
 * 
 * @link http://www.php.net/manual/en/filesystem.constants.php
 */
define ('GLOB_MARK', 8);

/**
 * 
 * @link http://www.php.net/manual/en/filesystem.constants.php
 */
define ('GLOB_NOSORT', 32);

/**
 * 
 * @link http://www.php.net/manual/en/filesystem.constants.php
 */
define ('GLOB_NOCHECK', 16);

/**
 * 
 * @link http://www.php.net/manual/en/filesystem.constants.php
 */
define ('GLOB_NOESCAPE', 4096);
define ('GLOB_ERR', 4);

/**
 * 
 * @link http://www.php.net/manual/en/filesystem.constants.php
 */
define ('GLOB_ONLYDIR', 1073741824);

/**
 * 
 * @link http://www.php.net/manual/en/filesystem.constants.php
 */
define ('GLOB_AVAILABLE_FLAGS', 1073746108);

/**
 * system is unusable
 * @link http://www.php.net/manual/en/network.constants.php
 */
define ('LOG_EMERG', 1);

/**
 * action must be taken immediately
 * @link http://www.php.net/manual/en/network.constants.php
 */
define ('LOG_ALERT', 1);

/**
 * critical conditions
 * @link http://www.php.net/manual/en/network.constants.php
 */
define ('LOG_CRIT', 1);

/**
 * error conditions
 * @link http://www.php.net/manual/en/network.constants.php
 */
define ('LOG_ERR', 4);

/**
 * warning conditions
 * @link http://www.php.net/manual/en/network.constants.php
 */
define ('LOG_WARNING', 5);

/**
 * normal, but significant, condition
 * @link http://www.php.net/manual/en/network.constants.php
 */
define ('LOG_NOTICE', 6);

/**
 * informational message
 * @link http://www.php.net/manual/en/network.constants.php
 */
define ('LOG_INFO', 6);

/**
 * debug-level message
 * @link http://www.php.net/manual/en/network.constants.php
 */
define ('LOG_DEBUG', 6);

/**
 * kernel messages
 * @link http://www.php.net/manual/en/network.constants.php
 */
define ('LOG_KERN', 0);

/**
 * generic user-level messages
 * @link http://www.php.net/manual/en/network.constants.php
 */
define ('LOG_USER', 8);

/**
 * mail subsystem
 * @link http://www.php.net/manual/en/network.constants.php
 */
define ('LOG_MAIL', 16);

/**
 * other system daemons
 * @link http://www.php.net/manual/en/network.constants.php
 */
define ('LOG_DAEMON', 24);

/**
 * security/authorization messages (use LOG_AUTHPRIV instead
 * in systems where that constant is defined)
 * @link http://www.php.net/manual/en/network.constants.php
 */
define ('LOG_AUTH', 32);

/**
 * messages generated internally by syslogd
 * @link http://www.php.net/manual/en/network.constants.php
 */
define ('LOG_SYSLOG', 40);

/**
 * line printer subsystem
 * @link http://www.php.net/manual/en/network.constants.php
 */
define ('LOG_LPR', 48);

/**
 * USENET news subsystem
 * @link http://www.php.net/manual/en/network.constants.php
 */
define ('LOG_NEWS', 56);

/**
 * UUCP subsystem
 * @link http://www.php.net/manual/en/network.constants.php
 */
define ('LOG_UUCP', 64);

/**
 * clock daemon (cron and at)
 * @link http://www.php.net/manual/en/network.constants.php
 */
define ('LOG_CRON', 72);

/**
 * security/authorization messages (private)
 * @link http://www.php.net/manual/en/network.constants.php
 */
define ('LOG_AUTHPRIV', 80);

/**
 * include PID with each message
 * @link http://www.php.net/manual/en/network.constants.php
 */
define ('LOG_PID', 1);

/**
 * if there is an error while sending data to the system logger,
 * write directly to the system console
 * @link http://www.php.net/manual/en/network.constants.php
 */
define ('LOG_CONS', 2);

/**
 * (default) delay opening the connection until the first
 * message is logged
 * @link http://www.php.net/manual/en/network.constants.php
 */
define ('LOG_ODELAY', 4);

/**
 * open the connection to the logger immediately
 * @link http://www.php.net/manual/en/network.constants.php
 */
define ('LOG_NDELAY', 8);

/**
 * 
 * @link http://www.php.net/manual/en/network.constants.php
 */
define ('LOG_NOWAIT', 16);

/**
 * print log message also to standard error
 * @link http://www.php.net/manual/en/network.constants.php
 */
define ('LOG_PERROR', 32);

/**
 * 
 * @link http://www.php.net/manual/en/array.constants.php
 */
define ('EXTR_OVERWRITE', 0);

/**
 * 
 * @link http://www.php.net/manual/en/array.constants.php
 */
define ('EXTR_SKIP', 1);

/**
 * 
 * @link http://www.php.net/manual/en/array.constants.php
 */
define ('EXTR_PREFIX_SAME', 2);

/**
 * 
 * @link http://www.php.net/manual/en/array.constants.php
 */
define ('EXTR_PREFIX_ALL', 3);

/**
 * 
 * @link http://www.php.net/manual/en/array.constants.php
 */
define ('EXTR_PREFIX_INVALID', 4);

/**
 * 
 * @link http://www.php.net/manual/en/array.constants.php
 */
define ('EXTR_PREFIX_IF_EXISTS', 5);

/**
 * 
 * @link http://www.php.net/manual/en/array.constants.php
 */
define ('EXTR_IF_EXISTS', 6);

/**
 * 
 * @link http://www.php.net/manual/en/array.constants.php
 */
define ('EXTR_REFS', 256);

/**
 * SORT_ASC is used with
 * array_multisort to sort in ascending order.
 * @link http://www.php.net/manual/en/array.constants.php
 */
define ('SORT_ASC', 4);

/**
 * SORT_DESC is used with
 * array_multisort to sort in descending order.
 * @link http://www.php.net/manual/en/array.constants.php
 */
define ('SORT_DESC', 3);

/**
 * SORT_REGULAR is used to compare items normally.
 * @link http://www.php.net/manual/en/array.constants.php
 */
define ('SORT_REGULAR', 0);

/**
 * SORT_NUMERIC is used to compare items numerically.
 * @link http://www.php.net/manual/en/array.constants.php
 */
define ('SORT_NUMERIC', 1);

/**
 * SORT_STRING is used to compare items as strings.
 * @link http://www.php.net/manual/en/array.constants.php
 */
define ('SORT_STRING', 2);

/**
 * SORT_LOCALE_STRING is used to compare items as
 * strings, based on the current locale. Added in PHP 5.0.2.
 * @link http://www.php.net/manual/en/array.constants.php
 */
define ('SORT_LOCALE_STRING', 5);

/**
 * SORT_NATURAL is used to compare items as
 * strings using "natural ordering" like natsort. Added in PHP 5.4.0.
 * @link http://www.php.net/manual/en/array.constants.php
 */
define ('SORT_NATURAL', 6);

/**
 * SORT_FLAG_CASE can be combined
 * (bitwise OR) with
 * SORT_STRING or
 * SORT_NATURAL to sort strings case-insensitively. Added in PHP 5.4.0.
 * @link http://www.php.net/manual/en/array.constants.php
 */
define ('SORT_FLAG_CASE', 8);

/**
 * CASE_LOWER is used with
 * array_change_key_case and is used to convert array
 * keys to lower case. This is also the default case for
 * array_change_key_case.
 * @link http://www.php.net/manual/en/array.constants.php
 */
define ('CASE_LOWER', 0);

/**
 * CASE_UPPER is used with
 * array_change_key_case and is used to convert array
 * keys to upper case.
 * @link http://www.php.net/manual/en/array.constants.php
 */
define ('CASE_UPPER', 1);

/**
 * 
 * @link http://www.php.net/manual/en/array.constants.php
 */
define ('COUNT_NORMAL', 0);

/**
 * 
 * @link http://www.php.net/manual/en/array.constants.php
 */
define ('COUNT_RECURSIVE', 1);

/**
 * ARRAY_FILTER_USE_BOTH is used with
 * array_filter to pass both value and key to the given callback function.
 * Added in PHP 5.6.0.
 * @link http://www.php.net/manual/en/array.constants.php
 */
define ('ARRAY_FILTER_USE_BOTH', 1);

/**
 * ARRAY_FILTER_USE_KEY is used with
 * array_filter to pass each key as the first argument to the given callback function.
 * Added in PHP 5.6.0.
 * @link http://www.php.net/manual/en/array.constants.php
 */
define ('ARRAY_FILTER_USE_KEY', 2);
define ('ASSERT_ACTIVE', 1);
define ('ASSERT_CALLBACK', 2);
define ('ASSERT_BAIL', 3);
define ('ASSERT_WARNING', 4);
define ('ASSERT_QUIET_EVAL', 5);
define ('ASSERT_EXCEPTION', 6);

/**
 * Flag indicating if the stream
 * used the include path.
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_USE_PATH', 1);
define ('STREAM_IGNORE_URL', 2);

/**
 * Flag indicating if the wrapper
 * is responsible for raising errors using trigger_error 
 * during opening of the stream. If this flag is not set, you
 * should not raise any errors.
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_REPORT_ERRORS', 8);

/**
 * This flag is useful when your extension really must be able to randomly
 * seek around in a stream. Some streams may not be seekable in their
 * native form, so this flag asks the streams API to check to see if the
 * stream does support seeking. If it does not, it will copy the stream
 * into temporary storage (which may be a temporary file or a memory
 * stream) which does support seeking.
 * Please note that this flag is not useful when you want to seek the
 * stream and write to it, because the stream you are accessing might
 * not be bound to the actual resource you requested.
 * If the requested resource is network based, this flag will cause the
 * opener to block until the whole contents have been downloaded.
 * @link http://www.php.net/manual/en/internals2.ze1.streams.constants.php
 */
define ('STREAM_MUST_SEEK', 16);
define ('STREAM_URL_STAT_LINK', 1);
define ('STREAM_URL_STAT_QUIET', 2);
define ('STREAM_MKDIR_RECURSIVE', 1);
define ('STREAM_IS_URL', 1);
define ('STREAM_OPTION_BLOCKING', 1);
define ('STREAM_OPTION_READ_TIMEOUT', 4);
define ('STREAM_OPTION_READ_BUFFER', 2);
define ('STREAM_OPTION_WRITE_BUFFER', 3);
define ('STREAM_BUFFER_NONE', 0);
define ('STREAM_BUFFER_LINE', 1);
define ('STREAM_BUFFER_FULL', 2);

/**
 * Stream casting, when stream_cast is called 
 * otherwise (see above).
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_CAST_AS_STREAM', 0);

/**
 * Stream casting, for when stream_select is 
 * calling stream_cast.
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_CAST_FOR_SELECT', 3);

/**
 * Used with stream_metadata, to specify touch call.
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_META_TOUCH', 1);

/**
 * Used with stream_metadata, to specify chown call.
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_META_OWNER', 3);

/**
 * Used with stream_metadata, to specify chown call.
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_META_OWNER_NAME', 2);

/**
 * Used with stream_metadata, to specify chgrp call.
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_META_GROUP', 5);

/**
 * Used with stream_metadata, to specify chgrp call.
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_META_GROUP_NAME', 4);

/**
 * Used with stream_metadata, to specify chmod call.
 * @link http://www.php.net/manual/en/stream.constants.php
 */
define ('STREAM_META_ACCESS', 6);

/**
 * gd.constants.type
 * @link http://www.php.net/manual/en/image.constants.php
 */
define ('IMAGETYPE_GIF', 1);

/**
 * gd.constants.type
 * @link http://www.php.net/manual/en/image.constants.php
 */
define ('IMAGETYPE_JPEG', 2);

/**
 * gd.constants.type
 * @link http://www.php.net/manual/en/image.constants.php
 */
define ('IMAGETYPE_PNG', 3);

/**
 * gd.constants.type
 * @link http://www.php.net/manual/en/image.constants.php
 */
define ('IMAGETYPE_SWF', 4);

/**
 * gd.constants.type
 * @link http://www.php.net/manual/en/image.constants.php
 */
define ('IMAGETYPE_PSD', 5);

/**
 * gd.constants.type
 * @link http://www.php.net/manual/en/image.constants.php
 */
define ('IMAGETYPE_BMP', 6);

/**
 * gd.constants.type
 * @link http://www.php.net/manual/en/image.constants.php
 */
define ('IMAGETYPE_TIFF_II', 7);

/**
 * gd.constants.type
 * @link http://www.php.net/manual/en/image.constants.php
 */
define ('IMAGETYPE_TIFF_MM', 8);

/**
 * gd.constants.type
 * @link http://www.php.net/manual/en/image.constants.php
 */
define ('IMAGETYPE_JPC', 9);

/**
 * gd.constants.type
 * @link http://www.php.net/manual/en/image.constants.php
 */
define ('IMAGETYPE_JP2', 10);

/**
 * gd.constants.type
 * @link http://www.php.net/manual/en/image.constants.php
 */
define ('IMAGETYPE_JPX', 11);

/**
 * gd.constants.type
 * @link http://www.php.net/manual/en/image.constants.php
 */
define ('IMAGETYPE_JB2', 12);

/**
 * gd.constants.type
 * @link http://www.php.net/manual/en/image.constants.php
 */
define ('IMAGETYPE_SWC', 13);

/**
 * gd.constants.type
 * @link http://www.php.net/manual/en/image.constants.php
 */
define ('IMAGETYPE_IFF', 14);

/**
 * gd.constants.type
 * @link http://www.php.net/manual/en/image.constants.php
 */
define ('IMAGETYPE_WBMP', 15);

/**
 * gd.constants.type
 * @link http://www.php.net/manual/en/image.constants.php
 */
define ('IMAGETYPE_JPEG2000', 9);

/**
 * gd.constants.type
 * @link http://www.php.net/manual/en/image.constants.php
 */
define ('IMAGETYPE_XBM', 16);

/**
 * gd.constants.type
 * (Available as of PHP 5.3.0)
 * @link http://www.php.net/manual/en/image.constants.php
 */
define ('IMAGETYPE_ICO', 17);

/**
 * gd.constants.type
 * (Available as of PHP 7.1.0)
 * @link http://www.php.net/manual/en/image.constants.php
 */
define ('IMAGETYPE_WEBP', 18);
define ('IMAGETYPE_UNKNOWN', 0);
define ('IMAGETYPE_COUNT', 19);

/**
 * IPv4 Address Resource
 * @link http://www.php.net/manual/en/network.constants.php
 */
define ('DNS_A', 1);

/**
 * Authoritative Name Server Resource
 * @link http://www.php.net/manual/en/network.constants.php
 */
define ('DNS_NS', 2);

/**
 * Alias (Canonical Name) Resource
 * @link http://www.php.net/manual/en/network.constants.php
 */
define ('DNS_CNAME', 16);

/**
 * Start of Authority Resource
 * @link http://www.php.net/manual/en/network.constants.php
 */
define ('DNS_SOA', 32);

/**
 * Pointer Resource
 * @link http://www.php.net/manual/en/network.constants.php
 */
define ('DNS_PTR', 2048);

/**
 * Host Info Resource (See IANA's
 * Operating System Names
 * for the meaning of these values)
 * @link http://www.php.net/manual/en/network.constants.php
 */
define ('DNS_HINFO', 4096);

/**
 * Certification Authority Authorization Resource (available as of PHP 7.0.16 and 7.1.2)
 * @link http://www.php.net/manual/en/network.constants.php
 */
define ('DNS_CAA', 8192);

/**
 * Mail Exchanger Resource
 * @link http://www.php.net/manual/en/network.constants.php
 */
define ('DNS_MX', 16384);

/**
 * Text Resource
 * @link http://www.php.net/manual/en/network.constants.php
 */
define ('DNS_TXT', 32768);
define ('DNS_SRV', 33554432);
define ('DNS_NAPTR', 67108864);

/**
 * IPv6 Address Resource
 * @link http://www.php.net/manual/en/network.constants.php
 */
define ('DNS_AAAA', 134217728);
define ('DNS_A6', 16777216);

/**
 * Any Resource Record. On most systems
 * this returns all resource records, however
 * it should not be counted upon for critical
 * uses. Try DNS_ALL instead.
 * @link http://www.php.net/manual/en/network.constants.php
 */
define ('DNS_ANY', 268435456);

/**
 * Iteratively query the name server for
 * each available record type.
 * @link http://www.php.net/manual/en/network.constants.php
 */
define ('DNS_ALL', 251721779);

// End of standard v.7.3.0
