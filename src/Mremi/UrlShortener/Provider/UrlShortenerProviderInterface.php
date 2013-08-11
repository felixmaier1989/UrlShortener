<?php

namespace Mremi\UrlShortener\Provider;

/**
 * Url shortener provider interface
 *
 * @author Rémi Marseille <marseille.remi@gmail.com>
 */
interface UrlShortenerProviderInterface
{
    /**
     * Gets the provider name
     *
     * @return string
     */
    public function getName();

    /**
     * Shortens the long given URL
     *
     * @param string $longUrl URL to shorten
     *
     * @return \Mremi\UrlShortener\Model\LinkInterface
     *
     * @throws \Mremi\UrlShortener\Exception\InvalidApiResponseException
     */
    public function shorten($longUrl);

    /**
     * Expands the short given URL
     *
     * @param string $shortUrl URL to expand
     *
     * @return \Mremi\UrlShortener\Model\LinkInterface
     *
     * @throws \Mremi\UrlShortener\Exception\InvalidApiResponseException
     */
    public function expand($shortUrl);
}