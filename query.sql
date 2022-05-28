SELECT inventory_code, final_stock
FROM stock
WHERE stock_code IN (
    SELECT MAX(stock_code)
    FROM stock
    GROUP BY inventory_code
) ORDER BY inventory_code asc