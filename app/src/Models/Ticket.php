<?php
class ticket{
    private $ticketId;
    private $ticketName;
    private $ticketPrice;
    private $amount;
    private $reasonForSell;

    /**
     * ticket constructor.
     * @param $ticketName
     * @param $ticketPrice
     * @param $amount
     * @param $reasonForSell
     */
    public function __construct(int $ticketId, string $ticketName, float $ticketPrice, int $amount, string $reasonForSell) {
        $this->ticketId = $ticketId;
        $this->ticketName = $ticketName;
        $this->ticketPrice = $ticketPrice;
        $this->amount = $amount;
        $this->reasonForSell = $reasonForSell;
    }

    /**
     * @return int
     */
    public function getTicketId(): int {
        return $this->ticketId;
    }

    /**
     * @param int $ticketId
     */
    public function setTicketId(int $ticketId): void {
        $this->ticketId = $ticketId;
    }

    /**
     * @return string
     */
    public function getTicketName(): string
    {
        return $this->ticketName;
    }

    /**
     * @param string $ticketName
     */
    public function setTicketName(string $ticketName): void
    {
        $this->ticketName = $ticketName;
    }

    /**
     * @return float
     */
    public function getTicketPrice(): float
    {
        return $this->ticketPrice;
    }

    /**
     * @param float $ticketPrice
     */
    public function setTicketPrice(float $ticketPrice): void
    {
        $this->ticketPrice = $ticketPrice;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     */
    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getReasonForSell(): string
    {
        return $this->reasonForSell;
    }

    /**
     * @param string $reasonForSell
     */
    public function setReasonForSell(string $reasonForSell): void
    {
        $this->reasonForSell = $reasonForSell;
    }


}
?>