<?php

namespace GoogleTagManager\Events;

use Thelia\Core\Event\ActionEvent;
use Thelia\Model\Customer;

class GoogleTagPageViewEvent extends ActionEvent
{
    protected array $result;
    protected ?Customer $user;
    protected ?string $view;

    public function __construct(array $result, ?Customer $user, ?string $view)
    {
        $this->result = $result;
        $this->user = $user;
        $this->view = $view;
    }
    public function getUser(): ?Customer
    {
        return $this->user;
    }

    public function setUser(?Customer $user): GoogleTagPageViewEvent
    {
        $this->user = $user;

        return $this;
    }

    public function getResult(): array
    {
        return $this->result;
    }

    public function setResult(array $result): GoogleTagPageViewEvent
    {
        $this->result = $result;

        return $this;
    }

    public function getView(): ?string
    {
        return $this->view;
    }

    public function setView(?string $view): GoogleTagPageViewEvent
    {
        $this->view = $view;

        return $this;
    }
}
