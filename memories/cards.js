var memorydata; // a global

d3.json("memories.json", function(error, json) {
  if (error) return console.warn(error);
  memorydata = json;
  // console.log(memorydata);
  createMemoryDivs();
});


function createMemoryDivs() {

	var memories = d3.select("#wrapper").selectAll("div")
	                                    .data(memorydata.memories)
	                                    .enter()
	                          			.append("div")
	                          			.attr("class", "memory");

	memories.append("p")
	        .attr("class", "firstName")
	        .text(function(d) {return d.firstName})

	memories.append("p")
	        .attr("class", "lastName")
	        .text(function(d) {return d.lastName})

	memories.append("p")
	        .attr("class", "memtext")
	        .text(function(d) {return d.text})

	// console.log(memories);

}




////this works as it should
// function visualizeit() {

// 	var svgContainer = d3.select("#wrapper").append("svg")
// 	                                    .attr("width", 200)
// 	                                    .attr("height", 200);

// 	var circles = svgContainer.selectAll("circle")
// 	                          .data(memorydata.memories)
// 	                          .enter()
// 	                          .append("circle");

// }