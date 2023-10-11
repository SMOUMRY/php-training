<!-- FUNCTIONS FILE -->

<?php

/**
 * Return a HTML string to create a UL element with an array values in LI
 *
 * @param array $array
 * @return string
 */
function turnArrayToHtmlList(array $array): string
{
    return '<ul>' . implode('', array_map(fn ($v) => "<li>{$v}</li>", $array)) . '</ul>';
};

/**
 * Display even values of a given array
 *
 * @param array $array
 * @return array
 */
function sortEvenValueArray(array $array): array
{
    return array_filter($array, fn ($values) => $values % 2 === 0);
};

/**
 * Return Even Index of a Given Array into an array
 *
 * @param array $array - Given array
 * @return array
 */
function getEvenIndexInArray(array $array): array
{
    return array_filter($array, fn ($k) => !($k % 2), ARRAY_FILTER_USE_KEY);
};

/**
 * Return a given array with doubled values.
 *
 * @param array $array
 * @return array
 */
function doubleArrayValue(array $array): array
{
    return array_map(fn ($value) => $value * 2, $array);
};

/**
 * Divide array values by a given int
 *
 * @param array $array - Source array
 * @param integer $divider - Will divide array values by this int.
 * @return array - Return divided array
 */
function divideValueBy(array $array, int $divider): array
{
    return array_map(fn ($value) => $value /= $divider, $array);
};

/**
 * Computes the intersection of arrays
 *
 * @param array $array1
 * @param array $array2
 * @return array
 */
function intersectArray(array $array1, array $array2): array
{
    return array_filter($array1, fn ($values) => in_array($values, $array2));
};

/**
 * Compute difference in Arrays
 *
 * @param array $array1
 * @param array $array2
 * @return array
 */
function diffArray(array $array1, array $array2): array
{
    return array_filter($array1, fn ($values) => !in_array($values, $array2));
};

/**
 * Display a diff array of 2 array given.
 * If bool is true, will be displayed as a array_unique
 * 
 * @param array $array1
 * @param array $array2
 * @param boolean $bool
 * @return void
 */
function arrayDiffUnique(array $array1, array $array2, bool $unique = false): void
{
    $unique ? var_dump(array_unique(diffArray($array1, $array2))) : var_dump(diffArray($array1, $array2));
};

/**
 * Slice N firsts values of a given array, N depending on a given int.
 *
 * @param array $array : Given Array
 * @param integer $int : Number of values needed
 * @return array
 */
function displayFirstArrayValue(array $array, int $int): array
{
    return array_filter($array, fn ($k) => $k <= $int - 1, ARRAY_FILTER_USE_KEY);
};


function getArrayOfValueByKey(string $key): array{
    global $series;
    $array = array_unique(array_map(function ($serie) use($key) {
        return $serie["$key"];
    }, $series));
    sort($array);
    return $array;
}