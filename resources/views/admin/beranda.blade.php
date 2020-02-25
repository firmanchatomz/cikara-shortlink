@extends('layouts.admin')

@section('title','Beranda Admin')

@section('container')

<div class="row">
  <div class="col-md-12">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>SELAMAT DATANG ADMIN!</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="clearfix">
          <div class="float-left">
            <i class="mdi mdi-network text-primary icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Total Shortlink</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">{{ Db::totaldata('slink')}}</h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3 mb-0">
          <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> 2020
        </p>
      </div>
    </div>
  </div>

  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="clearfix">
          <div class="float-left">
            <i class="mdi mdi-library-books text-warning icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Total Artikel</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">{{ Db::totaldata('artikel')}}</h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3 mb-0">
          <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> 2020
        </p>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="clearfix">
          <div class="float-left">
            <i class="mdi mdi-calendar-clock text-success icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Total View Shortlink</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">{{ $jumlahview->jumlah }}</h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3 mb-0">
          <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> 2020
        </p>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="clearfix">
          <div class="float-left">
            <i class="mdi mdi-apps text-info icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Maintenance</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">0</h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3 mb-0">
          <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> maintenance
        </p>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12 mb-3">
    <div class="card">
      <div class="card-header bg-primary text-white">
        Top View Shortlink <span class="float-right">Top Rate {{ bulan_indo($datatoprate)}}</span>
      </div>
      <div class="card-body">
        <div class="row  justify-content-end">
          <div class="col-3">
            <form action="{{ url('/cikara/post/toprate')}}" method="post">
              @csrf
              <div class="form-group">
                <select name="bulan" id="" class="form-control" onchange="this.form.submit()">
                  @foreach (bulan() as $index => $nama)
                      <option value="{{ $index }}" @if ($datatoprate == $index)
                          selected
                      @endif>{{ $nama }}</option>
                  @endforeach
                </select>
              </div>
            </form>
          </div>
        </div>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Rate</th>
              <th scope="col">Link Short</th>
              <th scope="col">Link Original</th>
              <th scope="col">Total</th>
            </tr>
          </thead>
          <tbody>
            @foreach (Db::chart3($datatoprate) as $item)
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $item->link_short }}</td>
                <td>{{ substr($item->link_original,0,50). anymore($item->link_original)}}</td>
                <td>{{ $item->view }}</td>
              </tr>
            @endforeach
            @if (count(Db::chart3($datatoprate)) == 0)
            <tr class="text-center">
              <td colspan="4">Tidak ada statistik</td>
            </tr>
                
            @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-md-12 mb-3">
    <div class="card">
      <div class="card-header bg-primary text-white">
        Top Referring Sites <span class="float-right">Top Rate {{ bulan_indo($datatopreferer)}}</span>
      </div>
      <div class="card-body">
        <div class="row  justify-content-end">
          <div class="col-3">
            <form action="{{ url('/cikara/post/topreferer')}}" method="post">
              @csrf
              <div class="form-group">
                <select name="bulan" id="" class="form-control" onchange="this.form.submit()">
                  @foreach (bulan() as $index => $nama)
                      <option value="{{ $index }}" @if ($datatopreferer == $index)
                          selected
                      @endif>{{ $nama }}</option>
                  @endforeach
                </select>
              </div>
            </form>
          </div>
        </div>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Rate</th>
              <th scope="col">Link references</th>
              <th scope="col">Total</th>
            </tr>
          </thead>
          <tbody>
            @foreach (Db::chart4($datatopreferer) as $item)
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ substr($item->link,0,50). anymore($item->link)}}</td>
                <td>{{ $item->jumlah }}</td>
              </tr>
            @endforeach
            @if (count(Db::chart4($datatopreferer)) == 0)
            <tr class="text-center">
              <td colspan="4">Tidak ada statistik</td>
            </tr>
                
            @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-md-12 mb-3">
    <div class="card">
      <div class="card-header bg-primary text-white">
        Statistik View per tanggal <span class="float-right">{{ bulan_indo($datatanggal)}}</span>
      </div>
      <div class="card-body">
        <div class="row  justify-content-end">
          <div class="col-3">
            <form action="{{ url('/cikara/post/tanggal')}}" method="post">
              @csrf
              <div class="form-group">
                <select name="bulan" id="" class="form-control" onchange="this.form.submit()">
                  @foreach (bulan() as $index => $nama)
                      <option value="{{ $index }}" @if ($datatanggal == $index)
                          selected
                      @endif>{{ $nama }}</option>
                  @endforeach
                </select>
              </div>
            </form>
          </div>
        </div>
        <div id="chart1"></div>
      </div>
    </div>
  </div>
  <div class="col-md-12 mb-3">
    <div class="card">
      <div class="card-header bg-primary text-white">
        Statistik View per bulan <span class="float-right">{{ date('Y')}}</span>
      </div>
      <div class="card-body">
        <div id="chart2"></div>
      </div>
    </div>
  </div>
</div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
  Highcharts.chart('chart1', {
    chart: {
        type: 'area'
    },
    accessibility: {
        description: 'Image description: An area chart compares the nuclear stockpiles of the USA and the USSR/Russia between 1945 and 2017. The number of nuclear weapons is plotted on the Y-axis and the years on the X-axis. The chart is interactive, and the year-on-year stockpile levels can be traced for each country. The US has a stockpile of 6 nuclear weapons at the dawn of the nuclear age in 1945. This number has gradually increased to 369 by 1950 when the USSR enters the arms race with 6 weapons. At this point, the US starts to rapidly build its stockpile culminating in 32,040 warheads by 1966 compared to the USSR’s 7,089. From this peak in 1966, the US stockpile gradually decreases as the USSR’s stockpile expands. By 1978 the USSR has closed the nuclear gap at 25,393. The USSR stockpile continues to grow until it reaches a peak of 45,000 in 1986 compared to the US arsenal of 24,401. From 1986, the nuclear stockpiles of both countries start to fall. By 2000, the numbers have fallen to 10,577 and 21,000 for the US and Russia, respectively. The decreases continue until 2017 at which point the US holds 4,018 weapons compared to Russia’s 4,500.'
    },
    title: {
        text: 'Total View Shortlink Per Tanggal'
    },
    subtitle: {
        text: 'Sources: Database'
    },
    xAxis: {
        allowDecimals: false,
        labels: {
            formatter: function () {
                return this.value; // clean, unformatted number for year
            }
        },
        accessibility: {
            rangeDescription: 'Range: 1940 to 2017.'
        }
    },
    yAxis: {
        title: {
            text: 'Total view'
        },
        labels: {
            formatter: function () {
                return this.value + ' view';
            }
        }
    },
    tooltip: {
        pointFormat: '{series.name} total <b>{point.y:,.0f} {point.x}'
    },
    plotOptions: {
        area: {
            pointStart: 1,
            marker: {
                enabled: false,
                symbol: 'circle',
                radius: 2,
                states: {
                    hover: {
                        enabled: true
                    }
                }
            }
        }
    },
    series: [{
        name: 'Tanggal',
        data: [
          {{ Db::chart1($datatanggal)}}
        ]
    }]
});

Highcharts.chart('chart2', {
    chart: {
        type: 'area'
    },
    accessibility: {
        description: 'Image description: An area chart compares the nuclear stockpiles of the USA and the USSR/Russia between 1945 and 2017. The number of nuclear weapons is plotted on the Y-axis and the years on the X-axis. The chart is interactive, and the year-on-year stockpile levels can be traced for each country. The US has a stockpile of 6 nuclear weapons at the dawn of the nuclear age in 1945. This number has gradually increased to 369 by 1950 when the USSR enters the arms race with 6 weapons. At this point, the US starts to rapidly build its stockpile culminating in 32,040 warheads by 1966 compared to the USSR’s 7,089. From this peak in 1966, the US stockpile gradually decreases as the USSR’s stockpile expands. By 1978 the USSR has closed the nuclear gap at 25,393. The USSR stockpile continues to grow until it reaches a peak of 45,000 in 1986 compared to the US arsenal of 24,401. From 1986, the nuclear stockpiles of both countries start to fall. By 2000, the numbers have fallen to 10,577 and 21,000 for the US and Russia, respectively. The decreases continue until 2017 at which point the US holds 4,018 weapons compared to Russia’s 4,500.'
    },
    title: {
        text: 'Total View Shortlink Per Bulan'
    },
    subtitle: {
        text: 'Sources: Database'
    },
    xAxis: {
        allowDecimals: false,
        labels: {
            formatter: function () {
                return this.value; // clean, unformatted number for year
            }
        },
        accessibility: {
            rangeDescription: 'Range: 1940 to 2017.'
        }
    },
    yAxis: {
        title: {
            text: 'Total view'
        },
        labels: {
            formatter: function () {
                return this.value + ' view';
            }
        }
    },
    tooltip: {
        pointFormat: '{series.name} total <b>{point.y:,.0f} {point.x}'
    },
    plotOptions: {
        area: {
            pointStart: 1,
            marker: {
                enabled: false,
                symbol: 'circle',
                radius: 2,
                states: {
                    hover: {
                        enabled: true
                    }
                }
            }
        }
    },
    series: [{
        name: 'Bulan',
        data: [
          {{ Db::chart2()}}
        ]
    }]
});

</script>
@endsection