<?php namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\Guard;

class sitemap {

    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }


    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ( !$request->is("sitemap") && $request->fullUrl() != '' && $this->auth->guest() )
        {

            $web_url = $request->url();
            $parsed = parse_url($web_url);
            $changefreq = 'always';

            $aSiteMap[$request->fullUrl()] = [
                'added' => time(),
                'lastmod' => Carbon::now()->toDateString(),
                'priority' => 1 - substr_count($request->getPathInfo(), '/') / 10,
                'changefreq' => $changefreq
            ];


            switch ($parsed['host']) {
                case "getaustraliastanding.org":
                    $aSiteMap = \Cache::get('sitemap_aus', []);
                    \Cache::put('sitemap_aus', $aSiteMap, 2880);
            break;

            }


            /*
            if ( !empty( $aSiteMap[$request->fullUrl()]['added'] ) ) {
                $aDateDiff = Carbon::createFromTimestamp( $aSiteMap[$request->fullUrl()]['added'] )->diff( Carbon::now() );
                if ( $aDateDiff->y > 0 ) {
                    $changefreq = 'yearly';
                } else if ( $aDateDiff->m > 0) {
                    $changefreq = 'monthly';
                } else if ( $aDateDiff->d > 6 ) {
                    $changefreq = 'weekly';
                } else if ( $aDateDiff->d > 0 && $aDateDiff->d < 7 ) {
                    $changefreq = 'daily';
                } else if ( $aDateDiff->h > 0 ) {
                    $changefreq = 'hourly';
                } else {
                    $changefreq = 'always';
                }
            }
            */


        }
        return $next($request);
    }
}