<?php

use Clusteramaryllis\Gettext\Facades\Gettext;

if (! function_exists('_setlocale')) {
    /**
     * Set a requested locale.
     *
     * @param  mixed $category
     * @return string
     */
    function _setlocale($category)
    {
        return call_user_func_array(Gettext::class.'::setLocale', func_get_args());
    }
}

if (! function_exists('_bindtextdomain')) {
    /**
     * Set the path for a domain.
     *
     * @param  string $domain
     * @param  string $path
     * @return string
     */
    function _bindtextdomain($domain, $path)
    {
        return Gettext::bindTextDomain($domain, $path);
    }
}

if (! function_exists('_bind_textdomain_codeset')) {
    /**
     * Specify the character encoding in which the messages
     * from the DOMAIN message catalog will be returned.
     *
     * @param  string $domain
     * @param  string $codeset
     * @return string
     */
    function _bind_textdomain_codeset($domain, $codeset)
    {
        return Gettext::bindTextDomainCodeset($domain, $codeset);
    }
}

if (! function_exists('_textdomain')) {
    /**
     * Set the default domain.
     *
     * @param  string|null $domain
     * @return string
     */
    function _textdomain($domain = null)
    {
        return Gettext::textDomain($domain);
    }
}

if (! function_exists('__')) {
    /**
     * Lookup a message in the current domain.
     *
     * @param  string $msgid
     * @param  array  $arguments
     * @return string
     */
    function __($msgid, $arguments = [])
    {
        $line = Gettext::getText($msgid);
        return replacePlaceholders($line, $arguments);
    }
}

if (! function_exists('_n')) {
    /**
     * Plural version of gettext.
     *
     * @param  string $msgid1
     * @param  string $msgid2
     * @param  int    $n
     * @param  array  $arguments
     * @return string
     */
    function _n($msgid1, $msgid2, $n, $arguments = [])
    {
        $line = Gettext::nGetText($msgid1, $msgid2, $n);
        return replacePlaceholders($line, $arguments);
    }
}

if (! function_exists('_d')) {
    /**
     * Override the current domain.
     *
     * @param  string $domain
     * @param  string $msgid
     * @param  array  $arguments
     * @return string
     */
    function _d($domain, $msgid, $arguments = [])
    {
        $line = Gettext::dGetText($domain, $msgid);
        return replacePlaceholders($line, $arguments);
    }
}

if (! function_exists('_dn')) {
    /**
     * Plural version of dgettext.
     *
     * @param  string $domain
     * @param  string $msgid1
     * @param  string $msgid2
     * @param  int    $n
     * @param  array  $arguments
     * @return string
     */
    function _dn($domain, $msgid1, $msgid2, $n, $arguments = [])
    {
        $line = Gettext::dNGetText($domain, $msgid1, $msgid2, $n);
        return replacePlaceholders($line, $arguments);
    }
}

if (! function_exists('_dc')) {
    /**
     * Override the domain for a single lookup.
     *
     * @param  string $domain
     * @param  string $msgid
     * @param  int    $category
     * @param  array  $arguments
     * @return string
     */
    function _dc($domain, $msgid, $category, $arguments = [])
    {
        $line = Gettext::dCGetText($domain, $msgid, $category);
        return replacePlaceholders($line, $arguments);
    }
}

if (! function_exists('_dcn')) {
    /**
     * Plural version of dcgettext.
     *
     * @param  string $domain
     * @param  string $msgid1
     * @param  string $msgid2
     * @param  int    $n
     * @param  int    $category
     * @param  array  $arguments
     * @return string
     */
    function _dcn($domain, $msgid1, $msgid2, $n, $category, $arguments = [])
    {
        $line = Gettext::dCNGetText($domain, $msgid1, $msgid2, $n, $category);
        return replacePlaceholders($line, $arguments);
    }
}

if (! function_exists('_p')) {
    /**
     * Context version of gettext.
     *
     * @param  string $context
     * @param  string $msgid
     * @param  array  $arguments
     * @return string
     */
    function _p($context, $msgid, $arguments = [])
    {
        $line = Gettext::pGetText($context, $msgid, $arguments = []);
        return replacePlaceholders($line, $arguments);
    }
}

if (! function_exists('_dp')) {
    /**
     * Override the current domain in a context gettext call.
     *
     * @param  string $domain
     * @param  string $context
     * @param  string $msgid
     * @param  array  $arguments
     * @return string
     */
    function _dp($domain, $context, $msgid, $arguments = [])
    {
        $line = Gettext::dPGetText($domain, $context, $msgid);
        return replacePlaceholders($line, $arguments);
    }
}

if (! function_exists('_dcp')) {
    /**
     * Override the domain and category for a single context-based lookup.
     *
     * @param  string $domain
     * @param  string $context
     * @param  string $msgid
     * @param  int    $category
     * @param  array  $arguments
     * @return string
     */
    function _dcp($domain, $context, $msgid, $category, $arguments = [])
    {
        $line = Gettext::dCPGetText($domain, $context, $msgid, $category);
        return replacePlaceholders($line, $arguments);
    }
}

if (! function_exists('_np')) {
    /**
     * Context version of ngettext.
     *
     * @param  string $context
     * @param  string $msgid1
     * @param  string $msgid2
     * @param  int    $n
     * @param  array  $arguments
     * @return string
     */
    function _np($context, $msgid1, $msgid2, $n, $arguments = [])
    {
        $line = Gettext::nPGetText($context, $msgid1, $msgid2, $n);
        return replacePlaceholders($line, $arguments);
    }
}

if (! function_exists('_dnp')) {
    /**
     * Override the current domain in a context ngettext call.
     *
     * @param  string $domain
     * @param  string $context
     * @param  string $msgid1
     * @param  string $msgid2
     * @param  int    $n
     * @param  array  $arguments
     * @return string
     */
    function _dnp($domain, $context, $msgid1, $msgid2, $n, $arguments = [])
    {
        $line = Gettext::dNPGetText($domain, $context, $msgid1, $msgid2, $n);
        return replacePlaceholders($line, $arguments);
    }
}

if (! function_exists('_dcnp')) {
    /**
     * Override the domain and category for a plural context-based lookup.
     *
     * @param  string $domain
     * @param  string $context
     * @param  string $msgid1
     * @param  string $msgid2
     * @param  int    $n
     * @param  int    $category
     * @param  array  $arguments
     * @return string
     */
    function _dcnp($domain, $context, $msgid1, $msgid2, $n, $category, $arguments = [])
    {
        $line = Gettext::dCNPGetText($domain, $context, $msgid1, $msgid2, $n, $category);
        return replacePlaceholders($line, $arguments);
    }
}

if(!function_exists('replacePlaceholders')) {
    /**
     * Replace the place-holders on a line.
     *
     * @param  string  $line
     * @param  array   $arguments
     * @return string
     */
    function replacePlaceholders($line, $arguments = [])
    {
        $sortOrder = [];
        foreach($arguments as $key => $value) {
            $sortOrder[$key] = mb_strlen($key) * -1;
        }

        asort($sortOrder);

        foreach(array_keys($sortOrder) as $key) {
            $line = str_replace(':' . $key, $arguments[$key], $line);
        }

        return $line;
    }
}