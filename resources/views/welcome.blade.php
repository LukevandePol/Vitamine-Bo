<x-layout :title="'- Home'">
    <strong>Database Connected: </strong> <?php try { \DB::connection()->getPDO(); echo \DB::connection()->getDatabaseName(); } catch (\Exception $e) { echo 'None'; } ?>
</x-layout>
