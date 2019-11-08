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
class Cloudflare
{
    use Macroable;
    protected $zone;
    protected $dns;
    protected $ips;

    public function __construct($email, $api)
    {
        $key = new Key($email, $api);
        $this->adapter = new Adapter($key);
    }

    /**
     * @return \Cloudflare\API\Endpoints\DNS
     */
    public function dns()
    {
        return new DNS($this->adapter);
    }

    /**
     * @return \Cloudflare\API\Endpoints\Zones
     */
    public function zone()
    {
        return new Zones($this->adapter);
    }

    /**
     * @return \Cloudflare\API\Endpoints\ZoneLockdown
     */
    public function zoneLockdown()
    {
        return new ZoneLockdown($this->adapter());
    }

    /**
     * @return \Cloudflare\API\Endpoints\ZoneSettings
     */
    public function zoneSetting()
    {
        return new ZoneSettings($this->adapter());
    }

    /**
     * @return \Cloudflare\API\Endpoints\IPs
     */
    public function ip()
    {
        return new IPs($this->adapter());
    }

    /**
     * @return \Cloudflare\API\Endpoints\SSL
     */
    public function ssl()
    {
        return new SSL($this->adapter());
    }

    /**
     * @return \Cloudflare\API\Endpoints\TLS
     */
    public function tls()
    {
        return new TLS($this->adapter());
    }

    /**
     * @return \Cloudflare\API\Endpoints\Crypto
     */
    public function crypto()
    {
        return new Crypto($this->adapter());
    }

    /**
     * @return \Cloudflare\API\Endpoints\AccessRules
     */
    public function rule()
    {
        return new AccessRules($this->adapter());
    }

    /**
     * @return \Cloudflare\API\Endpoints\FirewallSettings
     */
    public function firewall()
    {
        return new FirewallSettings($this->adapter());
    }

    /**
     * @return \Cloudflare\API\Endpoints\LoadBalancers
     */
    public function loadBalance()
    {
        return new LoadBalancers($this->adapter());
    }

    /**
     * @return \Cloudflare\API\Endpoints\Membership
     */
    public function membership()
    {
        return new Membership($this->adapter());
    }

    /**
     * @return \Cloudflare\API\Endpoints\Pools
     */
    public function pool()
    {
        return new Pools($this->adapter());
    }

    /**
     * @return \Cloudflare\API\Endpoints\Railgun
     */
    public function railgun()
    {
        return new Railgun($this->adapter());
    }

    /**
     * @return \Cloudflare\API\Endpoints\UARules
     */
    public function userAgent()
    {
        return new UARules($this->adapter());
    }

    /**
     * @return \Cloudflare\API\Endpoints\User
     */
    public function user()
    {
        return new User($this->adapter());
    }

    /**
     * @return \Cloudflare\API\Endpoints\WAF
     */
    public function waf()
    {
        return new WAF($this->adapter());
    }
}
