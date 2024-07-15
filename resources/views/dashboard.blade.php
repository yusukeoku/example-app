<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    <form action="#" method="POST">
                        @csrf
                        <div class="mb-4 flex items-center space-x-2">
                            <div class="flex-grow">
                                <label for="isbn" class="block text-gray-700">ISBN/JANコードを入力</label>
                                <div class="flex items-center space-x-2">
                                    <input type="text" id="isbn" name="isbn" class="mt-1 block border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
                                    <button type="button" class="bg-gray-500 text-white py-2 px-4 rounded-md hover:bg-gray-600">スマレジISBNコードCSV取込</button>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 flex items-center space-x-2">
                            <div class="flex-grow">
                                <label for="book_jan" class="block text-gray-700">書籍JANコードを入力</label>
                                <div class="flex items-center space-x-2">
                                    <input type="text" id="book_jan" name="book_jan" class="mt-1 block border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
                                    <button type="button" class="bg-gray-500 text-white py-2 px-4 rounded-md hover:bg-gray-600">スマレジ売上CSV取込・登録</button>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 flex items-center space-x-2">
                            <div class="flex-grow">
                                <label for="quantity" class="block text-gray-700">入荷冊数</label>
                                <input type="number" id="quantity" name="quantity" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <button type="button" class="bg-gray-500 text-white py-2 px-4 rounded-md hover:bg-gray-600">仮登録</button>
                            <button type="button" class="bg-gray-500 text-white py-2 px-4 rounded-md hover:bg-gray-600">マスターデータに登録</button>
                            <button type="button" class="bg-gray-500 text-white py-2 px-4 rounded-md hover:bg-gray-600">終了</button>
                        </div>
                    </form>
                    <div class="mt-6 border rounded-md h-40 overflow-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="bg-gray-200">
                                    <th class="px-4 py-2">列1</th>
                                    <th class="px-4 py-2">列2</th>
                                    <th class="px-4 py-2">列3</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border px-4 py-2">データ1</td>
                                    <td class="border px-4 py-2">データ2</td>
                                    <td class="border px-4 py-2">データ3</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
