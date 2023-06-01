

// ---------- CHARTS ----------

// BAR CHART
var barChartOptions = {
  series: [{
    data: [32, 40, 23, 48],
    name: "Totale",
  }],
  chart: {
    type: "bar",
    background: "transparent",
    height: 350,
    toolbar: {
      show: false,
    },
  },
  colors: [
    "#2962ff",
    "#d50000",
    "#2e7d32",
    "#ff6d00",
   
  ],
  plotOptions: {
    bar: {
      distributed: true,
      borderRadius: 4,
      horizontal: false,
      columnWidth: "40%",
    }
  },
  dataLabels: {
    enabled: false,
  },
  fill: {
    opacity: 1,
  },
  grid: {
    borderColor: "#55596e",
    yaxis: {
      lines: {
        show: true,
      },
    },
    xaxis: {
      lines: {
        show: true,
      },
    },
  },
  legend: {
    labels: {
      colors: "#f5f7ff",
    },
    show: true,
    position: "top",
  },
  stroke: {
    colors: ["transparent"],
    show: true,
    width: 2
  },
  tooltip: {
    shared: true,
    intersect: false,
    theme: "dark",
  },
  xaxis: {
    categories: ["Admin", "Etudiants", "Ensegnient", "Visiteur"],
    title: {
      style: {
        color: "#f5f7ff",
      },
    },
    axisBorder: {
      show: true,
      color: "#55596e",
    },
    axisTicks: {
      show: true,
      color: "#55596e",
    },
    labels: {
      style: {
        colors: "#f5f7ff",
      },
    },
  },
  yaxis: {
   
  
      labels: {
        style: {
          colors: "#f5f7ff",
        },
      },
  }
};

var barChart = new ApexCharts(document.querySelector("#bar-chart"), barChartOptions);
barChart.render();


// AREA CHART
var areaChartOptions = {
    series: [{
        name: "Admin",
      data: [31, 40, 28, 51, 42, 109, 100],
    }, {
     name: "Etudiant", 
      data: [11, 32, 45, 32, 34, 52, 41],
    },
    {
        name: "Ensegniant",
        data: [20, 12, 23, 60, 26, 50, 51],
      }],
    chart: {
      type: "area",
      background: "transparent",
      height: 350,
      stacked: false,
      toolbar: {
        show: false,
      },
    },
    colors: [ "#d50000","#2e7d32","#2962ff"],
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
    dataLabels: {
      enabled: false,
    },
    fill: {
      gradient: {
        opacityFrom: 0.4,
        opacityTo: 0.1,
        shadeIntensity: 1,
        stops: [0, 100],
        type: "vertical",
      },
      type: "gradient",
    },
    grid: {
      borderColor: "#55596e",
      yaxis: {
        lines: {
          show: true,
        },
      },
      xaxis: {
        lines: {
          show: true,
        },
      },
    },
    legend: {
      labels: {
        colors: "#f5f7ff",
      },
      show: true,
      position: "top",
    },
    markers: {
      size: 6,
      strokeColors: "#1b2635",
      strokeWidth: 3,
    },
    stroke: {
      curve: "smooth",
    },
    xaxis: {
      axisBorder: {
        color: "#55596e",
        show: true,
      },
      axisTicks: {
        color: "#55596e",
        show: true,
      },
      labels: {
        offsetY: 5,
        style: {
          colors: "#f5f7ff",
        },
      },
    },
    yaxis: 
    [
      
        {
        labels: {
          style: {
            colors: ["#f5f7ff"],
          },
        },
    },
    
    ],
    tooltip: {
      shared: true,
      intersect: false,
      theme: "dark",
    }
  };
  
  var areaChart = new ApexCharts(document.querySelector("#area-chart"), areaChartOptions);
  areaChart.render();
       