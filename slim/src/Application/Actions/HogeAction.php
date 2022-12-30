<?php

declare(strict_types=1);

namespace App\Application\Actions;

use Psr\Http\Message\ResponseInterface as Response;

class HogeAction extends Action
{
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
        return $this->view('hoge.html', [
            'abc' => "こんにちは。",
        ]);
    }
}
