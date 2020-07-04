<?php

namespace App\Http\Middleware;

use Closure;

class IpLimit
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $config = \Config::get('ip_limit');
		if ($config['enable'] !== true) {
			return $next($request);
		}
		if ($config['isProxy'] === true) {
			$request->setTrustedProxies([$request->ip()]);
		}
		if ($this->isAllow($request->ip(), $config['allowIps']) === false) {
			$error_message = 'cannot access from : ' . $request->ip();
			//Log::debug($error_message);
			return redirect('/');

		}
        return $next($request);
    }

    private function isAllow(string $remoteIp, array $accepts) {
		foreach ($accepts as $accept) {
			if ($this->isIn($remoteIp, $accept)) {
				return true;
			}
		}
		return false;
	}

	private function isIn(string $remoteIp, string $accept) {
		if (strpos($accept, '/') === false) {
			return ($remoteIp === $accept);
		}
		list($acceptIp, $mask) = explode('/', $accept);
		$acceptLong = ip2long($acceptIp) >> (32 - (int) $mask);
		$remoteLong = ip2long($remoteIp) >> (32 - (int) $mask);
		return ($acceptLong == $remoteLong);
	}
}
