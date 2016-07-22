 @foreach($shouts as $shout)

        @if($shout->user_id % 2 == 0)
            <li class="clearfix left col-xs-12 no-padding"><span class="chat-img pull-left">
                            <img src="{{ $shout->user->getGravatarLink(40) }}" width="40" height="40" alt="User Avatar" class="img-circle"/>
                                </span>
                <div class="chat-body clearfix">
                    <div class="header text-left">
                        <a class="{{ $shout->user->isAdmin() ? "text-green" : "" }}" href="{{ route('user.show',$shout->user->username) }}">
                            <strong class="">{{ $shout->user->displayName() }}</strong>
                        </a>
                        <br>

                        <!-- Shout Delete System

                                        @can('delete',$shout)
                                <div class="pull-right">
                                    {{ Form::open(['method' => 'delete', 'route' => ['shouts.delete',$shout->id], 'class' => 'deleteShout']) }}
                                <button data-toggle="tooltip" title="Delete" class="btn btn-link btn-xs"><i class="fa fa-trash"></i></button>
                                {{ Form::close() }}
                                </div>
                                @endcan
                                -->

                        <small class="text-muted">
                            <span class="fa fa-clock-o"></span> {{ $shout->created_at->diffForHumans() }}
                        </small>
                    </div>
                    <p class="convert-emoji">
                        {!! Emojione\Emojione::toImage(nl2br(linkify(htmlentities($shout->shout)))) !!}
                    </p>
                </div>
            </li>
        @else

            <li class="right clearfix col-xs-12 no-padding"><span class="chat-img pull-right">
                            <img src="{{ $shout->user->getGravatarLink(40) }}" width="40" height="40" alt="User Avatar" class="img-circle"/>
                        </span>
                <div class="chat-body clearfix">
                    <div class="header text-right">
                        <a class="{{ $shout->user->isAdmin() ? "text-green" : "" }}" href="{{ route('user.show',$shout->user->username) }}">
                            <strong class="">{{ $shout->user->displayName() }}</strong>
                        </a>
                        <br>
                        <small class="text-muted"><span class="fa fa-clock-o"></span> {{ $shout->created_at->diffForHumans() }}
                        </small>

                        <!--Shout Delete System
                                        @can('delete',$shout)
                                <div class="pull-left">
                                    {{ Form::open(['method' => 'delete', 'route' => ['shouts.delete',$shout->id],'class' => 'deleteShout']) }}
                                <button data-toggle="tooltip" title="Delete" class="btn btn-link btn-xs"><i class="fa fa-trash"></i></button>
                                {{ Form::close() }}
                                </div>
                                @endcan
                                -->
                    </div>
                    <p class="text-right convert-emoji">
                        {!! Emojione\Emojione::toImage(nl2br(linkify(htmlentities($shout->shout)))) !!}
                    </p>
                </div>
            </li>
        @endif
 @endforeach