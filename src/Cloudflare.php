<?php

namespace Teakowa\Cloudflare;

use Cloudflare\API\Adapter\Guzzle as Adapter;
use Cloudflare\API\Auth\APIKey as Key;
use Cloudflare\API\Endpoints\{AccessRules,
    Crypto,
    DNS,
    FirewallSettings,
    IPs,
    LoadBalancers,
    Membership,
    Pools,
    Railgun,
    SSL,
    TLS,
    UARules,
    User,
    WAF,
    ZoneLockdown,
    Zones,
    ZoneSettings
};
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
        return new AccessRules($this->adapter());
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
