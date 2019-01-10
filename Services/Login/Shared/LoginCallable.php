<?php
/**
 * LoginCallable.php
 * Created by @anonymoussc on 01/10/2019 6:11 AM.
 */

namespace App\Components\Passerby\Services\Login\Shared;


/**
 * Trait LoginCallable
 * @package App\Components\Passerby\Services\Login\Shared
 */
trait LoginCallable
{
    /**
     * @param       $proxy
     * @param       $grantType
     * @param array $data
     * @param array $param
     *
     * @return array
     */
    public function proxy(Callable $proxy, $grantType, array $data = [], array $param = []): array
    {
        return $proxy($grantType, $data, $param);
    }
}