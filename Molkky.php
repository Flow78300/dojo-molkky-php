<?php

namespace Molkky;

class Molkky
{
    public function getScore(array $seriesDeQuilles)
    {
        
        $result = 0;

        foreach ($seriesDeQuilles as $serieDeQuille) {
            if (count($serieDeQuille) === 1) {
                $result += $serieDeQuille[0];
            } elseif (count($serieDeQuille) > 1) {
                $result += count($serieDeQuille);
            }
        }
        if ($result > 50) {
            $result = 25;
        } elseif ($result === 50) {
            $result = 'WIN';
        }

        for ($i = 0; $i < count($seriesDeQuilles); $i++) {
            if (
                count($seriesDeQuilles[$i]) === 0
                && count($seriesDeQuilles[$i + 1]) === 0
                && count($seriesDeQuilles[$i + 2]) === 0
            ) {
                return 'LOST';
            }
        }
        return $result;
    }
}
