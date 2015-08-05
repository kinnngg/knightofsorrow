<?php
/**
 *
 * Copyright (c) 2014 Zishan Ansari
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * Date: 7/25/2015
 * Time: 2:24 AM
 */

namespace App\Server\Presenters;

use App\Status;
use McCool\LaravelAutoPresenter\BasePresenter;

class StatusPresenter extends BasePresenter
{
    /**
     * Construct the Model
     *
     * @param Status $resource
     */
    public function __construct(Status $resource)
    {
        $this->wrappedObject = $resource;
    }

    /**
     * Return timego of Publish
     *
     * @return mixed
     */
    public function timeSincePublished()
    {
        return $this->wrappedObject->created_at->diffForHumans();
    }

    public function statusBody()
    {
        $data = nl2br(htmlspecialchars($this->wrappedObject->body));

        \Emojione\Emojione::$ascii = true; 
        \Emojione\Emojione::$imagePathPNG = '/components/emojione/assets/png/';
        \Emojione\Emojione::$cacheBustParam = '';
        $data = \Emojione\Emojione::toImage($data);

        return embedYoutube($data);
    }
}