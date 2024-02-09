<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class UserCheck implements FilterInterface
{
    /**
     * Do whatever processing this filter needs to do.
     * By default it should not return anything during
     * normal execution. However, when an abnormal state
     * is found, it should return an instance of
     * CodeIgniter\HTTP\Response. If it does, script
     * execution will end and that Response will be
     * sent back to the client, allowing for error pages,
     * redirects, etc.
     *
     * @param RequestInterface $request
     * @param array|null       $arguments
     *
     * @return RequestInterface|ResponseInterface|string|void
     */
    public function before(RequestInterface $request, $arguments = null)
    {
        // Check cookie to see if user exists
        if (isset($_COOKIE['user'])) {
            return;
        }
        else
        {
            // call user check method in app model
            $appModel = new \App\Models\Front\AppModel();

            // get the last segment of the uri and figure out the CID
            $uri = service('uri');
            $cid = $uri->getSegment(2);

            // If userCheck() returns true set a cookie, else redirect to nogo
            if ($appModel->userCheck($cid))
            {
                setcookie('user', 'true', time() + (86400 * 30), "/");
            }
            else
            {
                return redirect()->to('/');
            }
        }
    }

    /**
     * Allows After filters to inspect and modify the response
     * object as needed. This method does not allow any way
     * to stop execution of other after filters, short of
     * throwing an Exception or Error.
     *
     * @param RequestInterface  $request
     * @param ResponseInterface $response
     * @param array|null        $arguments
     *
     * @return ResponseInterface|void
     */
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        //
    }
}
