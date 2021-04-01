<?php

namespace App\Services;

class OuraganService
{
    private $etats = [
        'lastRelief' => 0,
        'totalTerrain' => 0
    ];

    /**
     * @return int
     */
    public function getSurfaceDisponible(): int
    {
        $data = $this->getData();

        foreach ($data[1] as $index => $value) {

            if (0 === $index) {
                $this->etats['lastRelief'] = $value;
            } else {
                if ($this->etats['lastRelief'] > $value) {
                    $this->etats['totalTerrain']++;
                }
                if ($this->etats['lastRelief'] < $value) {
                    $this->etats['lastRelief'] = $value;
                }

            }
        }

        return $this->etats['totalTerrain'];
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return [10,
            [30, 27, 17, 42, 29, 12, 14, 41, 42, 42]
        ];
    }
}