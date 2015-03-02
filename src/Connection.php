<?php namespace Clowdy\Database;

use Illuminate\Database\Connection as IlluminateConnection;

class Connection extends IlluminateConnection
{
    /**
     * Determine if the given exception was caused by a lost connection.
     *
     * @param  \Illuminate\Database\QueryException
     * @return bool
     */
    protected function causedByLostConnection(QueryException $e)
    {
        $message = $e->getPrevious()->getMessage();

        return str_contains($message, [
            'server has gone away',
            'no connection to the server',
            'Lost connection'
        ]);
    }
}
