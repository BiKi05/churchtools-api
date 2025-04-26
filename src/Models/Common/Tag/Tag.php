<?php
namespace CTApi\Models\Common\Tag;

use CTApi\Models\AbstractModel;
use CTApi\Models\Groups\Person\Person;
use CTApi\Models\Groups\Person\PersonRequest;
use CTApi\Traits\Model\FillWithData;
use CTApi\Utils\CTDateTimeService;

class Tag extends AbstractModel
{
    use FillWithData;

    protected ?string $name = null;

    protected ?string $description = null;

    protected ?string $color = null;

    /**
     * @deprecated will not be replaced
     */
    protected ?string $modifiedAt = null;

    /**
     * @deprecated will not be replaced
     */
    protected ?string $modifiedBy = null;

    /**
     * @deprecated will not be replaced
     */
    protected ?string $count = null;

    protected function fillNonArrayType(string $key, $value): void
    {
        if ($key == "modifiedPid" || $key == "modifiedDate")
            //deprecated fields
            return;
        $this->fillDefault($key, $value);
    }

    /**
     * @deprecated will not be replaced
     */
    public function requestModifier(): ?Person
    {
        if ($this->modifiedBy != null) {
            return PersonRequest::find((int) $this->modifiedBy);
        }
        return null;
    }

    /**
     *
     * @param string|null $id
     * @return Tag
     */
    public function setId(?string $id): Tag
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @deprecated will not be replaced
     */
    public function getModifiedAtAsDateTime(): ?\DateTimeImmutable
    {
        return CTDateTimeService::stringToDateTime($this->modifiedAt);
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     * @return Tag
     */
    public function setName(?string $name): Tag
    {
        $this->name = $name;
        return $this;
    }
    
    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    
    /**
     * @param string|null $description
     * @return Tag
     */
    public function setDescription(?string $description): Tag
    {
        $this->description = $description;
        return $this;
    }
    
    /**
     * @return string|null
     */
    public function getColor(): ?string
    {
        return $this->color;
    }
    
    /**
     * @param string|null $color
     * @return Tag
     */
    public function setColor(?string $color): Tag
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @return string|null
     * @deprecated will not be replaced
     */
    public function getModifiedAt(): ?string
    {
        return $this->modifiedAt;
    }

    /**
     * @param string|null $modifiedAt
     * @return Tag
     * @deprecated will not be replaced
     */
    public function setModifiedAt(?string $modifiedAt): Tag
    {
        $this->modifiedAt = $modifiedAt;
        return $this;
    }

    /**
     * @return string|null
     * @deprecated will not be replaced
     */
    public function getModifiedBy(): ?string
    {
        return $this->modifiedBy;
    }

    /**
     * @param string|null $modifiedBy
     * @return Tag
     * @deprecated will not be replaced
     */
    public function setModifiedBy(?string $modifiedBy): Tag
    {
        $this->modifiedBy = $modifiedBy;
        return $this;
    }

    /**
     * @return string|null
     * @deprecated will not be replaced
     */
    public function getCount(): ?string
    {
        return $this->count;
    }

    /**
     * @param string|null $count
     * @return Tag
     * @deprecated will not be replaced
     */
    public function setCount(?string $count): Tag
    {
        $this->count = $count;
        return $this;
    }
}
