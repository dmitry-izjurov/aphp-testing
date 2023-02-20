<?php

declare(strict_types=1);

class UserTableWrapper implements TableWrapperInterface
{
    public array $tableColumns = ['name', 'surname'];
    public array $valuesRows = [
        ['Анатолий', 'Иванов'],
        ['Иван', 'Петров'],
        ['Илья', 'Сидоров']
    ];

    public function insert(array $values): void
    {
        if (count($this->tableColumns) === count($values)) {
            $this->valuesRows[] = $values;
        }
    }

    public function update(int $id, array $values): array
    {
        if (count($values) > 0 && count($this->tableColumns) >= count($values)) {
            foreach ($values as $key => $value) {
                $keyIndex = array_search($key, $this->tableColumns, true);
                if ($keyIndex || $keyIndex === 0) {
                    $this->valuesRows[$id][$keyIndex] = $value;
                } else {
                    return [];
                }
            }
            return $values;
        } else {
            return [];
        }

    }

    public function get(): array
    {
        return $this->valuesRows;
    }

    public function delete(int $id): void
    {
        if (isset($this->valuesRows[$id])) {
            unset($this->valuesRows[$id]);
        }
    }
}