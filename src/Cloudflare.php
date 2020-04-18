<?php

namespace Teakowa\Cloudflare;

use Cloudflare\API\Adapter\Guzzle as Adapter;
use Cloudflare\API\Auth\APIKey as Key;
use Cloudflare\API\Endpoints\AccessRules;
use Cloudflare\API\Endpoints\Crypto;
use Cloudflare\API\Endpoints\DNS;
use Cloudflare\API\Endpoints\FirewallSettings;
use Cloudflare\API\Endpoints\IPs;
use Cloudflare\API\Endpoints\LoadBalancers;
use Cloudflare\API\Endpoints\Membership;
use Cloudflare\API\Endpoints\Pools;
use Cloudflare\API\Endpoints\Railgun;
use Cloudflare\API\Endpoints\SSL;
use Cloudflare\API\Endpoints\TLS;
use Cloudflare\API\Endpoints\UARules;
use Cloudflare\API\Endpoints\User;
use Cloudflare\API\Endpoints\WAF;
use Cloudflare\API\Endpoints\ZoneLockdown;
use Cloudflare\API\Endpoints\Zones;
use Cloudflare\API\Endpoints\ZoneSettings;
use Illuminate\Support\Traits\Macroable;

/**
 * Class Cloudflare.
 *
 * @property \Cloudflare\API\Adapter\Guzzle adapter
 */
final class Cloudflare
{
    use Macroable;
    protected $zone;
    protected $dns;
    protected $ips;

    /**
     * Cloudflare constructor.
     *
     * @param string $email
     * @param string $api
     */
    public function __construct(string $email, string $api)
    {
        $key = new Key($email, $api);
        $this->adapter = new Adapter($key);
    }

    /**
     * @return \Cloudflare\API\Endpoints\DNS
     */
    public function dns(): DNS
    {
        return new DNS($this->adapter);
    }

    /**
     * @return \Cloudflare\API\Endpoints\Zones
     */
    public function zone(): Zones
    {
        return new Zones($this->adapter);
    }

    /**
     * @return \Cloudflare\API\Endpoints\ZoneLockdown
     */
    public function zoneLockdown(): ZoneLockdown
    {
        return new ZoneLockdown($this->adapter);
    }

    /**
     * @return \Cloudflare\API\Endpoints\ZoneSettings
     */
    public function zoneSetting(): ZoneSettings
    {
        return new ZoneSettings($this->adapter);
    }

    /**
     * @return \Cloudflare\API\Endpoints\IPs
     */
    public function ip(): IPs
    {
        return new IPs($this->adapter);
    }

    /**
     * @return \Cloudflare\API\Endpoints\SSL
     */
    public function ssl(): SSL
    {
        return new SSL($this->adapter);
    }

    /**
     * @return \Cloudflare\API\Endpoints\TLS
     */
    public function tls(): TLS
    {
        return new TLS($this->adapter);
    }

    /**
     * @return \Cloudflare\API\Endpoints\Crypto
     */
    public function crypto(): Crypto
    {
        return new Crypto($this->adapter);
    }

    /**
     * @return \Cloudflare\API\Endpoints\AccessRules
     */
    public function rule(): AccessRules
    {
        return new AccessRules($this->adapter);
    }

    /**
     * @return \Cloudflare\API\Endpoints\FirewallSettings
     */
    public function firewall(): FirewallSettings
    {
        return new FirewallSettings($this->adapter);
    }

    /**
     * @return \Cloudflare\API\Endpoints\LoadBalancers
     */
    public function loadBalance(): LoadBalancers
    {
        return new LoadBalancers($this->adapter);
    }

    /**
     * @return \Cloudflare\API\Endpoints\Membership
     */
    public function membership(): Membership
    {
        return new Membership($this->adapter);
    }

    /**
     * @return \Cloudflare\API\Endpoints\Pools
     */
    public function pool(): Pools
    {
        return new Pools($this->adapter);
    }

    /**
     * @return \Cloudflare\API\Endpoints\Railgun
     */
    public function railgun(): Railgun
    {
        return new Railgun($this->adapter);
    }

    /**
     * @return \Cloudflare\API\Endpoints\UARules
     */
    public function userAgent(): UARules
    {
        return new UARules($this->adapter);
    }

    /**
     * @return \Cloudflare\API\Endpoints\User
     */
    public function user(): User
    {
        return new User($this->adapter);
    }

    /**
     * @return \Cloudflare\API\Endpoints\WAF
     */
    public function waf(): WAF
    {
        return new WAF($this->adapter);
    }
}
