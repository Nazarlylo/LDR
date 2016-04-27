<?php namespace Modules\User\Presenters;

use Laracasts\Presenter\Presenter;
use Modules\Core\Contracts\Authentication;
use Modules\User\Entities\Sentinel\User;

class UserPresenter extends Presenter
{


    /**
     * Return the gravatar link for the users email
     * @param  int $size
     * @return string
     */
    public function gravatar($size = 90)
    {
        $email = md5($this->email);

        return "//www.gravatar.com/avatar/$email?s=$size";
    }

    /**
     * @return string
     */
    public function id(){
       $id = User::where('email',$this->email)->first();
       return $id->id;
  }
    public function fullname()
    {
        return $this->name ?: $this->first_name . ' ' . $this->last_name;
    }
}
