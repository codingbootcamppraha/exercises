function Cocktail(props) {

  return (
    <div className="Cocktail">
      <h1>{props.title}</h1>
      <img src={props.image} alt={props.title} />
    </div>
  );
}

export default Cocktail;
