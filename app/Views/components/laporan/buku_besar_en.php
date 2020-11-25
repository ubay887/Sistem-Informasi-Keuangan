<div class="card">
    <div class="card card-body">
        <h5>Laporan Buku Besar</h5>
        <form>
            <div class="row pt-4">
                <div class="col-12 col-md-4">
                    <select name="akun" class="form-control" id="akun">
                        <option value="semua">semua</option>
                        <option value="kas">kas</option>
                        <option value="piutang">piutang</option>
                        <option value="perlengkapan">perlengkapan</option>
                    </select>
                </div>
            </div>
        </form>
        <div class="pt-3">
            <button class="btn btn-success" id="download-laporan">Download</button>
        </div>
        <div id="laporan-view" class="pr-3 pl-3">
            <header class="text-center">
                <h1>LEDGER REPORT</h1>
                <p>Period 01 - 31 october 2020</p>
            </header>
            <div class="list-akun">
                <div class="item-akun mb-5">
                    <div class="row">
                        <div class="col text-left">Account Name : CASH</div>
                        <div class="col text-right">No Account : 111</div>
                    </div>
                    <table class="table table-striped">
                        <thead class="text-center">
                            <tr>
                                <th scope="col" rowspan="2" style="vertical-align: middle;">DATE</th>
                                <th scope="col" rowspan="2" style="vertical-align: middle;">DESCRIPTION</th>
                                <th scope="col" rowspan="2" style="vertical-align: middle;">DEBET</th>
                                <th scope="col" rowspan="2" style="vertical-align: middle;">CREDIT</th>
                                <th scope="col" colspan="2" style="border-bottom:none;">SALDO</th>
                            </tr>
                            <tr>
                                <td scope="col">DEBET</td>
                                <td scope="col">CREDIT</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">01 Oktober 2020</th>
                                <td class="text-left">Membeli perlengkapan</td>
                                <td>-</td>
                                <td>$ 3.600.000</td>
                                <td>$ 3.600.000</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <th scope="row">01 Oktober 2020</th>
                                <td class="text-right">Pembayaran Utang</td>
                                <td>$ 3.600.000</td>
                                <td>-</td>
                                <td>$ 3.600.000</td>
                                <td>-</td>
                            </tr>
                            <tr class="font-weight-bold">
                                <td colspan="4" class="text-center">TOTAL AMOUNT</td>
                                <td>$ 0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="item-akun mb-5">
                    <div class="row">
                        <div class="col text-left">Nama Akun : PIUTANG</div>
                        <div class="col text-right">No Akun : 112</div>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">TANGGAL</th>
                                <th scope="col">KETERANGAN</th>
                                <th scope="col">DEBET</th>
                                <th scope="col">KREDIT</th>
                                <th scope="col">SALDO</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">01 Oktober 2020</th>
                                <td class="text-left">Membeli perlengkapan</td>
                                <td>-</td>
                                <td>$ 3.600.000</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">01 Oktober 2020</th>
                                <td class="text-right">Pembayaran Utang</td>
                                <td>$ 3.600.000</td>
                                <td>-</td>
                                <td>@fat</td>
                            </tr>
                            <tr class="font-weight-bold">
                                <td colspan="4" class="text-center">TOTAL AMOUNT</td>
                                <td>$ 0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>